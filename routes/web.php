<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\GalleryController;
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
Route::controller(TeamController::class)->group(function () {
    Route::get('/admin/team', 'index')->name('admin.team.index');
    Route::get('/admin/team/create', 'create')->name('admin.team.create');
    Route::post('/admin/team/store', 'store')->name('admin.team.store');
    Route::get('/admin/team/edit/{id}', 'edit')->name('admin.team.edit');
    Route::post('/admin/team/update/{id}', 'update')->name('admin.team.update');
    Route::get('/admin/team/delete/{id}', 'destroy')->name('admin.team.delete');
    Route::get('/admin/team/inactive/{id}', 'inactive')->name('admin.team.inactive');
    Route::get('/admin/team/active/{id}', 'active')->name('admin.team.active');
});

Route::controller(GalleryController::class)->group(function () {
    Route::get('/admin/gallery', 'index')->name('admin.gallery.index');
    Route::get('/admin/gallery/create', 'create')->name('admin.gallery.create');
    Route::post('/admin/gallery/store', 'store')->name('admin.gallery.store');
    Route::get('/admin/gallery/edit/{id}', 'edit')->name('admin.gallery.edit');
    Route::post('/admin/gallery/update/{id}', 'update')->name('admin.gallery.update');
    Route::get('/admin/gallery/delete/{id}', 'destroy')->name('admin.gallery.delete');
    Route::get('/admin/gallery/inactive/{id}', 'inactive')->name('admin.gallery.inactive');
    Route::get('/admin/gallery/active/{id}', 'active')->name('admin.gallery.active');
});




require __DIR__.'/auth.php';
