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

    // Contact (RFQ) routes
    Route::resource('contacts', ContactController::class)->except(['show']);

    // Audits
    Route::get('audits', [AuditController::class, 'index'])->name('audits.index');
    Route::get('audits-export', [AuditController::class, 'exportCsv'])->name('audits.export');
});

// Public site routes
Route::name('site.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/industries', [PageController::class, 'industries'])->name('industries');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/{project}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/blog', [PageController::class, 'blog'])->name('blog');
    // Particles test page
    Route::view('/particles-test', 'site.pages.particles-test')->name('particles.test');
    // Three.js test page
    Route::view('/three-test', 'site.pages.three-test')->name('three.test');
    // Control Panel 3D test page
    Route::view('/control-panel-test', 'site.pages.control-panel-test')->name('controlpanel.test');
});

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

// Admin-only profile routes (no public users)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include the authentication routes
require __DIR__ . '/auth.php';
