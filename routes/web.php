<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SettingsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::controller(FaqController::class)->group(function () {
    Route::get('/admin/faq', 'index')->name('admin.faqs.index');
    Route::get('/admin/faq/create', 'create')->name('admin.faqs.create');
    Route::post('/admin/faq/store', 'store')->name('admin.faqs.store');
    Route::get('/admin/faq/edit/{id}', 'edit')->name('admin.faqs.edit');
    Route::post('/admin/faq/update/{id}', 'update')->name('admin.faqs.update');
    Route::get('/admin/faq/delete/{id}', 'destroy')->name('admin.faqs.delete');
    Route::get('/admin/faq/inactive/{id}', 'inactive')->name('admin.faqs.inactive');
    Route::get('/admin/faq/active/{id}', 'active')->name('admin.faqs.active');
});

// blog
Route::controller(BlogController::class)->group(function () {
    Route::get('/admin/blog', 'index')->name('admin.blog.index');
    Route::get('/admin/blog/create', 'create')->name('admin.blog.create');
    Route::post('/admin/blog/store', 'store')->name('admin.blog.store');
    Route::get('/admin/blog/edit/{id}', 'edit')->name('admin.blog.edit');
    Route::post('/admin/blog/update/{id}', 'update')->name('admin.blog.update');
    Route::get('/admin/blog/delete/{id}', 'destroy')->name('admin.blog.delete');
    Route::get('/admin/blog/inactive/{id}', 'inactive')->name('admin.blog.inactive');
    Route::get('/admin/blog/active/{id}', 'active')->name('admin.blog.active');
});

// event
Route::controller(EventController::class)->group(function () {
    Route::get('/admin/event', 'index')->name('admin.event.index');
    Route::get('/admin/event/create', 'create')->name('admin.event.create');        
    Route::post('/admin/event/store', 'store')->name('admin.event.store');
    Route::get('/admin/event/edit/{id}', 'edit')->name('admin.event.edit');
    Route::post('/admin/event/update/{id}', 'update')->name('admin.event.update');
    Route::get('/admin/event/delete/{id}', 'destroy')->name('admin.event.delete');
    Route::get('/admin/event/inactive/{id}', 'inactive')->name('admin.event.inactive');
    Route::get('/admin/event/active/{id}', 'active')->name('admin.event.active');
});


// slider
Route::controller(SliderController::class)->group(function () {
    Route::get('/admin/slider', 'index')->name('admin.slider.index');
    Route::get('/admin/slider/create', 'create')->name('admin.slider.create');        
    Route::post('/admin/slider/store', 'store')->name('admin.slider.store');
    Route::get('/admin/slider/edit/{id}', 'edit')->name('admin.slider.edit');
    Route::post('/admin/slider/update/{id}', 'update')->name('admin.slider.update');
    Route::get('/admin/slider/delete/{id}', 'destroy')->name('admin.slider.delete');
    Route::get('/admin/slider/inactive/{id}', 'inactive')->name('admin.slider.inactive');
    Route::get('/admin/slider/active/{id}', 'active')->name('admin.slider.active');
});


// testimonial
Route::controller(TestimonialController::class)->group(function () {
    Route::get('/admin/testimonial', 'index')->name('admin.testimonial.index');
    Route::get('/admin/testimonial/create', 'create')->name('admin.testimonial.create');        
    Route::post('/admin/testimonial/store', 'store')->name('admin.testimonial.store');
    Route::get('/admin/testimonial/edit/{id}', 'edit')->name('admin.testimonial.edit');
    Route::post('/admin/testimonial/update/{id}', 'update')->name('admin.testimonial.update');
    Route::get('/admin/testimonial/delete/{id}', 'destroy')->name('admin.testimonial.delete');
    Route::get('/admin/testimonial/inactive/{id}', 'inactive')->name('admin.testimonial.inactive');
    Route::get('/admin/testimonial/active/{id}', 'active')->name('admin.testimonial.active');
});

// partner
Route::controller(PartnerController::class)->group(function () {
    Route::get('/admin/partner', 'index')->name('admin.partner.index');
    Route::get('/admin/partner/create', 'create')->name('admin.partner.create');        
    Route::post('/admin/partner/store', 'store')->name('admin.partner.store');
    Route::get('/admin/partner/edit/{id}', 'edit')->name('admin.partner.edit');
    Route::post('/admin/partner/update/{id}', 'update')->name('admin.partner.update');
    Route::get('/admin/partner/delete/{id}', 'destroy')->name('admin.partner.delete');
    Route::get('/admin/partner/inactive/{id}', 'inactive')->name('admin.partner.inactive');
    Route::get('/admin/partner/active/{id}', 'active')->name('admin.partner.active');
});

// setting
Route::controller(SettingsController::class)->group(function () {
    Route::get('/admin/setting/mission', 'mission')->name('admin.setting.mission');
    Route::post('/admin/setting-mission/update', 'updateMission')->name('admin.setting-mission.update');
    // history
    Route::get('/admin/setting/history', 'history')->name('admin.setting.history');
    Route::post('/admin/setting-history/update', 'updateHistory')->name('admin.setting-history.update');
    //success
    Route::get('/admin/setting/success', 'success')->name('admin.setting.success');
    Route::post('/admin/setting-success/update', 'updateSuccess')->name('admin.setting-success.update');

    Route::get('/admin/setting/financial-aid', 'financialAid')->name('admin.setting.financial-aid');
    Route::post('/admin/setting-financial-aid/update', 'updateFinancialAid')->name('admin.setting-financial-aid.update');


    Route::get('/admin/setting/eligibility-financial-aid', 'eligibilityFinancialAid')->name('admin.setting.eligibility-financial-aid');
    Route::post('/admin/setting-eligibility-financial-aid/update', 'updateEligibilityFinancialAid')->name('admin.setting-eligibility-financial-aid.update');


    Route::get('/admin/setting/prerequisites', 'prerequisites')->name('admin.setting.prerequisites');
    Route::post('/admin/setting-prerequisites/update', 'updatePrerequisites')->name('admin.setting.prerequisites.update');


    Route::get('/admin/setting/application-support', 'applicationSupport')->name('admin.setting.application-support');
    Route::post('/admin/setting-application-support/update', 'updateApplicationSupport')->name('admin.setting-application-support.update');
});
    





Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.index');
    Route::get('/about', 'about')->name('frontend.about');
    Route::get('/our-team', 'team')->name('frontend.our-team');
    Route::get('/history', 'history')->name('frontend.history');
    Route::get('/success', 'success')->name('frontend.success');
    
    Route::get('/contact', 'contact')->name('frontend.contact');

    Route::post('/contact', 'submitContactForm')->name('frontend.contact.submit');
    Route::get('/who-we-are', 'whoWeAre')->name('frontend.who-we-are');
    Route::get('/gallery', 'gallery')->name('frontend.gallery');
    Route::get('/mission', 'mission')->name('frontend.mission');
    Route::get('/partner', 'partner')->name('frontend.partner');
    Route::get('/faqs', 'faq')->name('frontend.faq');
    Route::get('/blogs', 'blogs')->name('frontend.blogs');
    Route::get('/blog-detail/{id}', 'blogDetail')->name('frontend.blog-detail');
    Route::get('/financial-aids-for-eu-home-students', 'financialAids')->name('frontend.financialAids');
    Route::get('/eligibility-financial-aid', 'eligibility')->name('frontend.eligibility');

    Route::get('/application-support', 'applicationSupportFrontend')->name('frontend.application-support');
    Route::get('/want-to-study-abroad', 'wantToStudyAbroad')->name('frontend.want-to-study-abroad');
    Route::post('/want-to-study-abroad', 'submitWantToStudyAbroadForm')->name('frontend.want-to-study-abroad.submit');

    Route::get('/study-options', 'studyOptions')->name('frontend.study-options');
    Route::get('/course-finder', 'courseFinder')->name('frontend.course-finder');
    Route::get('/step-by-step-guideline', 'stepByStepGuideline')->name('frontend.step-by-step-guideline');  

    Route::get('/events', 'events')->name('frontend.events');
    Route::get('/event-detail/{id}', 'eventDetail')->name('frontend.event-detail');

    Route::get('/application-process', 'applicationProcess')->name('frontend.application-process');
    Route::get('/privacy-policy', 'privacyPolicy')->name('frontend.privacy-policy');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('frontend.terms-and-conditions');   

    Route::get('/free-consultant', 'freeConsultant')->name('frontend.free-consultant');
    Route::get('/prerequisites-to-study-abroad', 'prerequisitesToStudyAbroad')->name('frontend.prerequisites-to-study-abroad');
    
});
   




require __DIR__.'/auth.php';
