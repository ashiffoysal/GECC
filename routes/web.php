<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/admin', 'admin')->name('admin');
    Route::get('/admin/contact', 'contact')->name('admin.contact');
    Route::get('/admin/site-settings', 'siteSettings')->name('admin.site-settings');
    Route::post('/admin/site-settings/update', 'updateSiteSettings')->name('admin.site-settings.update');

    Route::get('/admin/seo-settings', 'seoSettings')->name('admin.seo-settings');
    Route::post('/admin/seo-settings/update', 'updateSeoSettings')->name('admin.seo-settings.update');
});



require __DIR__.'/auth.php';
