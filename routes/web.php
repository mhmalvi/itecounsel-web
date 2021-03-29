<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('check-eligibility', [HomeController::class, 'eligibity'])->name('eligibility');
Route::post('/eligibility', [MailController::class, 'eligibility'])->name('eligibity_check');
Route::post('/apply-now', [MailController::class, 'ApplyNow'])->name('apply');
Route::get('/send-mail', [MailController::class, 'sendEmail']);

Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [BlogController::class, 'blogDetails'])->name('blogDetail');

Route::get('mail', function () {
    return view('emails.testmail');
});

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact_us');
Route::post('/contact-us', [MailController::class, 'contact']);
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/rpl', [CourseController::class, 'index'])->name('rpl');
Route::get('/courses/diploma', [CourseController::class, 'diploma'])->name('diploma');
Route::get('/courses/diploma-advanced', [CourseController::class, 'ADdiploma'])->name('advanceDiploma');
Route::get('/courses/certificate-iii', [CourseController::class, 'certificate3'])->name('certificate3');
Route::get('/courses/certificate-iv', [CourseController::class, 'certificate4'])->name('certificate4');

//added by riaz
Route::get('/get-courses', [CourseController::class, 'getCourses']);
Route::get('/get-category', [CourseController::class, 'getCategory']);

Route::get('/migration', [MigrationController::class, 'index'])->name('migration');

Route::get('/services/tourist-visa', [ServicesController::class, 'tourist'])->name('tourist');
Route::get('/services/pte', [ServicesController::class, 'pte'])->name('pte');
Route::get('/services/ielts', [ServicesController::class, 'ielts'])->name('ielts');

Route::get('/admission/australia', [AdmissionController::class, 'australia'])->name('australia');
Route::get('/admission/canada', [AdmissionController::class, 'canada'])->name('canada');
Route::get('/admission/europe', [AdmissionController::class, 'europe'])->name('europe');
Route::get('/admission/malaysia', [AdmissionController::class, 'malaysia'])->name('malaysia');

Route::get('apply-now', [HomeController::class, 'applyNow'])->name('apply_now');

Route::post('upload', [AdminBlogController::class, 'uploadFile']);

/**
 * Admin Routes
 */
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('home');

        //Blogs
        Route::resource('blog', AdminBlogController::class);

        //Category
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::post('categories', [CategoryController::class, 'store'])->name('category.add');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('categories/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);

        //Settings
        Route::get('profile', [AdminHomeController::class, 'profile'])->name('userProfile');
        Route::post('profile', [AdminHomeController::class, 'profileUpdate'])->name('userProfileUpdate');
});
