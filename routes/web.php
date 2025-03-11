<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\WhyBullController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\StudentLifeController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ScrollingImageController;
use App\Http\Controllers\ChairmanMessageController;
use App\Http\Controllers\HomeIntroductionController;
use App\Http\Controllers\StudentAdmissionController;
use App\Http\Controllers\StudentTestiminialController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes

Route::get('/', [FrontController::class, "index"])->name("homepage");
Route::get('about/introduction', [FrontController::class, "introduction"])->name("about.introduction");
Route::get('about/management_team', [FrontController::class, "management"])->name("about.management-team");
Route::get('about/vision_mission', [FrontController::class, "vision_mission"])->name("about.vision-mission");
Route::get('about/silentfeature', [FrontController::class, "silentfeature"])->name("about.silent-feature");
Route::get('course/dict', [FrontController::class, "dict"])->name("courses.dict");
Route::get('course/web_development', [FrontController::class, "webdevelopment"])->name("courses.web-development");
Route::get('admission-form', [FrontController::class, "admissionform"])->name("admission-form");
Route::post('admission/form/submit',[FrontController::class,"admissionformsubmit"])->name('admission.form.submit');
Route::get('news_notice', [FrontController::class, "newsnotice"])->name("news-notice");
Route::get('program', [FrontController::class, "program"])->name("program");
Route::get('gallary/photo', [FrontController::class, "photo"])->name("gallary.photo");
Route::get('gallary/video', [FrontController::class, "video"])->name("gallary.video");
Route::get('vaccancy', [FrontController::class, "vaccancy"])->name("vaccancy");
Route::get('contactus', [FrontController::class, "contactus"])->name("contactus");
Route::post('newsletter/subscribe', [NewsletterController::class, "newslettersubscribe"])->name("newsletter.subscribe");

// Backend routes
Route::get('login/index', [AuthController::class, "loginindex"])->name("login.index");
Route::post('login', [AuthController::class, "login"])->name("login");

//route grouping
Route::prefix('admin/')->name('admin.')->middleware('auth.check')->group(function () {
    Route::get('dashboard', function () {
        return view('backend.dashboard');

    })->name('dashboard.index');

    Route::get('introduction/index', [IntroductionController::class, "index"])->name("introduction.index");
    Route::get('introduction/create', [IntroductionController::class, "create"])->name("introduction.create");
    Route::post('introduction/store', [IntroductionController::class, "store"])->name('introduction.store');
    Route::get('introduction/edit/{id}', [IntroductionController::class, "edit"])->name('introduction.edit');
    Route::post('introduction/update/{id}', [IntroductionController::class, "update"])->name('introduction.update');
    Route::any('introduction/delete/{id}', [IntroductionController::class, "delete"])->name('introduction.delete');


    Route::get('photo/gallery/index', [PhotoGalleryController::class, "index"])->name('photo.gallery.index');
    Route::get('photo/gallery/create', [PhotoGalleryController::class, "create"])->name('photo.gallery.create');
    Route::post('photo/gallery/store', [PhotoGalleryController::class, "store"])->name('photo.gallery.store');
    Route::get('photo/gallery/edit/{id}', [PhotoGalleryController::class, "edit"])->name('photo.gallery.edit');
    Route::post('photo/gallery/update/{id}', [PhotoGalleryController::class, "update"])->name('photo.gallery.update');
    Route::any('photo/gallery/delete/{id}', [PhotoGalleryController::class, "delete"])->name('photo.gallery.delete');


    Route::get('course/index', [CourseController::class, "index"])->name('course.index');
    Route::get('course/create', [CourseController::class, "create"])->name('course.create');
    Route::post('course/store', [CourseController::class, "store"])->name('course.store');
    Route::get('course/edit/{id}', [CourseController::class, "edit"])->name('course.edit');
    Route::post('course/update/{id}', [CourseController::class, "update"])->name('course.update');
    Route::any('course/delete/{id}', [CourseController::class, "delete"])->name('course.delete');


    Route::get('countries/index', [CountryController::class, "index"])->name('countries.index');
    Route::get('countries/create', [CountryController::class, "create"])->name('countries.create');
    Route::post('countries/store', [CountryController::class, "store"])->name('countries.store');
    Route::get('countries/edit/{id}', [CountryController::class, "edit"])->name('countries.edit');
    Route::post('countries/update/{id}', [CountryController::class, "update"])->name('countries.update');
    Route::any('countries/delete/{id}', [CountryController::class, "delete"])->name('countries.delete');


    Route::get('scrolling/index', [ScrollingImageController::class, "index"])->name('scrolling.index');
    Route::get('scrolling/create', [ScrollingImageController::class, "create"])->name('scrolling.create');
    Route::post('scrolling/store', [ScrollingImageController::class, "store"])->name('scrolling.store');
    Route::get('scrolling/edit/{id}', [ScrollingImageController::class, "edit"])->name('scrolling.edit');
    Route::post('scrolling/update/{id}', [ScrollingImageController::class, "update"])->name('scrolling.update');
    Route::any('scrolling/delete/{id}', [ScrollingImageController::class, "delete"])->name('scrolling.delete');

    Route::get('chairmanmessage/index', [ChairmanMessageController::class, "index"])->name('chairmanmessage.index');
    Route::get('chairmanmessage/create', [ChairmanMessageController::class, "create"])->name('chairmanmessage.create');
    Route::post('chairmanmessage/store', [ChairmanMessageController::class, "store"])->name('chairmanmessage.store');
    Route::get('chairmanmessage/edit/{id}', [ChairmanMessageController::class, "edit"])->name('chairmanmessage.edit');
    Route::post('chairmanmessage/update/{id}', [ChairmanMessageController::class, "update"])->name('chairmanmessage.update');
    Route::any('chairmanmessage/delete/{id}', [ChairmanMessageController::class, "delete"])->name('chairmanmessage.delete');


    Route::get('homeintroduction/index', [HomeIntroductionController::class, "index"])->name('homeintroduction.index');
    Route::get('homeintroduction/create', [HomeIntroductionController::class, "create"])->name('homeintroduction.create');
    Route::post('homeintroduction/store', [HomeIntroductionController::class, "store"])->name('homeintroduction.store');
    Route::get('homeintroduction/edit/{id}', [HomeIntroductionController::class, "edit"])->name('homeintroduction.edit');
    Route::post('homeintroduction/update/{id}', [HomeIntroductionController::class, "update"])->name('homeintroduction.update');
    Route::any('homeintroduction/delete/{id}', [HomeIntroductionController::class, "delete"])->name('homeintroduction.delete');


    Route::get('testimonials/index', [StudentTestiminialController::class, "index"])->name('testimonials.index');
    Route::get('testimonials/create', [StudentTestiminialController::class, "create"])->name('testimonials.create');
    Route::post('testimonials/store', [StudentTestiminialController::class, "store"])->name('testimonials.store');
    Route::get('testimonials/edit/{id}', [StudentTestiminialController::class, "edit"])->name('testimonials.edit');
    Route::post('testimonials/update/{id}', [StudentTestiminialController::class, "update"])->name('testimonials.update');
    Route::any('testimonials/delete/{id}', [StudentTestiminialController::class, "delete"])->name('testimonials.delete');


    Route::get('whybull/index', [WhyBullController::class, "index"])->name('whybull.index');
    Route::get('whybull/create', [WhyBullController::class, "create"])->name('whybull.create');
    Route::post('whybull/store', [WhyBullController::class, "store"])->name('whybull.store');
    Route::get('whybull/edit/{id}', [WhyBullController::class, "edit"])->name('whybull.edit');
    Route::post('whybull/update/{id}', [WhyBullController::class, "update"])->name('whybull.update');
    Route::any('whybull/delete/{id}', [WhyBullController::class, "delete"])->name('whybull.delete');


    Route::get('studentlife/index', [StudentLifeController::class, "index"])->name('studentlife.index');
    Route::get('studentlife/create', [StudentLifeController::class, "create"])->name('studentlife.create');
    Route::post('studentlife/store', [StudentLifeController::class, "store"])->name('studentlife.store');
    Route::get('studentlife/edit/{id}', [StudentLifeController::class, "edit"])->name('studentlife.edit');
    Route::post('studentlife/update/{id}', [StudentLifeController::class, "update"])->name('studentlife.update');
    Route::any('studentlife/delete/{id}', [StudentLifeController::class, "delete"])->name('studentlife.delete');
});

