<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AuditController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController as PublicContactController;
use App\Http\Controllers\TestimonialController as PublicTestimonialController;
use App\Http\Controllers\BlogController as PublicBlogController;
use App\Http\Controllers\LiveChatController;

// Admin routes with the 'admin' prefix and 'auth' middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    // Super Admin: manage admins
    Route::middleware('can:manage-admins')->group(function () {
        Route::get('admins', [UserController::class, 'index'])->name('admins.index');
        Route::post('admins', [UserController::class, 'store'])->name('admins.store');
        Route::get('admins/{user}/edit', [UserController::class, 'edit'])->name('admins.edit');
        Route::put('admins/{user}', [UserController::class, 'update'])->name('admins.update');
        Route::delete('admins/{user}', [UserController::class, 'destroy'])->name('admins.destroy');
    });

    // Admin Dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Testimonial routes
    Route::resource('testimonials', TestimonialController::class)->except(['show']);

    // Project routes
    Route::resource('projects', ProjectController::class)->except(['show']);

    // Blog routes (include show for preview)
    Route::resource('blogs', BlogController::class);

    // Contact (RFQ) routes: index, show (detail view), destroy
    Route::resource('contacts', ContactController::class)->only(['index','show','destroy']);

    // Audits
    Route::get('audits', [AuditController::class, 'index'])->name('audits.index');
    Route::get('audits-export', [AuditController::class, 'exportCsv'])->name('audits.export');
    
    // Live Chat Admin Routes
    Route::prefix('live-chat')->name('live-chat.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\LiveChatController::class, 'index'])->name('index');
        Route::get('/conversations', [\App\Http\Controllers\Admin\LiveChatController::class, 'getConversations'])->name('conversations');
        Route::get('/{conversation}', [\App\Http\Controllers\Admin\LiveChatController::class, 'show'])->name('show');
        Route::post('/{conversation}/assign', [\App\Http\Controllers\Admin\LiveChatController::class, 'assign'])->name('assign');
        Route::post('/{conversation}/send', [\App\Http\Controllers\Admin\LiveChatController::class, 'sendMessage'])->name('send');
        Route::post('/{conversation}/send-ajax', [\App\Http\Controllers\Admin\LiveChatController::class, 'sendMessageAjax'])->name('send-ajax');
        Route::post('/{conversation}/close', [\App\Http\Controllers\Admin\LiveChatController::class, 'close'])->name('close');
        Route::get('/{conversation}/messages', [\App\Http\Controllers\Admin\LiveChatController::class, 'getMessages'])->name('messages');
    });
});

// Public site routes
Route::name('site.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/industries', [PageController::class, 'industries'])->name('industries');
    Route::get('/industries/oil-gas', [PageController::class, 'oilGas'])->name('industries.oil-gas');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
        // Privacy Policy page
        Route::get('/privacy-policy', function () {
            return view('site.pages.privacy');
        })->name('privacy');
        // Terms of Service page
        Route::get('/terms-of-service', function () {
            return view('site.pages.terms');
        })->name('terms');
        Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    // Particles test page
    Route::view('/particles-test', 'site.pages.particles-test')->name('particles.test');
    // Three.js test page
    Route::view('/three-test', 'site.pages.three-test')->name('three.test');
    // Control Panel 3D test page
    Route::view('/control-panel-test', 'site.pages.control-panel-test')->name('controlpanel.test');

    // Service detail pages (static views)
    Route::view('/service/control', 'site.service.control')->name('service.control');
    Route::view('/service/automation', 'site.service.automation')->name('service.automation');
    Route::view('/service/system', 'site.service.system')->name('service.system');
    Route::view('/service/engineering', 'site.service.engineering')->name('service.engineering');
    Route::view('/service/safety', 'site.service.safety')->name('service.safety');
    Route::view('/service/compliance', 'site.service.compliance')->name('service.compliance');

    // Product detail pages (static views)
    Route::view('/product/plc', 'site.product.plc')->name('product.plc');
    Route::view('/product/power', 'site.product.power')->name('product.power');
    Route::view('/product/motor', 'site.product.motor')->name('product.motor');
    Route::view('/product/scada', 'site.product.scada')->name('product.scada');
    Route::view('/product/safety', 'site.product.safety')->name('product.safety');
    Route::view('/product/panels', 'site.product.panels')->name('product.panels');
});

// Contact form submission (throttled)
Route::post('/contact', [PublicContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

// Live Chat API routes (throttled)
Route::prefix('api/live-chat')->group(function () {
    Route::post('/start', [LiveChatController::class, 'startConversation'])->middleware('throttle:30,1');
    Route::post('/send', [LiveChatController::class, 'sendMessage'])->middleware('throttle:60,1');
    Route::get('/messages/{conversationId}', [LiveChatController::class, 'getMessages'])->middleware('throttle:120,1');
});

// Testimonial routes (outside site group for cleaner naming)
Route::get('/testimonials', [PublicTestimonialController::class, 'index'])->name('testimonials.index');

// Blog routes (outside site group for cleaner naming)
Route::get('/blog', [PublicBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [PublicBlogController::class, 'show'])->name('blog.show');

// Sitemap
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');

// Blog API routes
Route::get('/api/blogs/{id}', [PublicBlogController::class, 'getBlogApi']);
Route::get('/api/blogs/search', [PublicBlogController::class, 'search']);
Route::post('/newsletter/subscribe', [PublicBlogController::class, 'subscribeNewsletter']);

// Default authenticated dashboard route: redirect to admin dashboard if admin
Route::get('/dashboard', function () {
    if (auth()->check() && auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

// Optional: redirect '/admin' to the admin dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'is_admin']);


Route::middleware(['auth'])->group(function () {
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include the authentication routes
require __DIR__ . '/auth.php';