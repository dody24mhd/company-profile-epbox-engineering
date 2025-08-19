<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\UserController;

// Admin routes with the 'admin' prefix and 'auth' middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    // Super Admin: manage admins
    Route::middleware('can:manage-admins')->group(function () {
        Route::get('admins', [UserController::class, 'index'])->name('admins.index');
        Route::post('admins', [UserController::class, 'store'])->name('admins.store');
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
});

// Public home route
Route::get('/', function () {
    return view('welcome');
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
Route::middleware(['auth','is_admin'])->group(function () {
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include the authentication routes
require __DIR__ . '/auth.php';
