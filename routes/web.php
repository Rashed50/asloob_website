<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\JobApplicantInfoController;
use App\Http\Controllers\Admin\ProjectInfoController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/// cache clear route /

Route::get('/clear-cache', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('view:clear');
    $run = Artisan::call('config:cache');
    //return \Artisan::call('db:seed');

    return 'CACHE CLEARED SUCCESSFULLY';
});

Route::get('/', function () {
    return view('welcome');
});


    // ################################## Frontend  ##################################
Route::get('/',[FrontendController::class, 'index'])->name('frontend');
Route::get('/about',[FrontendController::class, 'about'])->name('frontend-about');
Route::get('/services',[FrontendController::class, 'service'])->name('frontend-service');
Route::get('/contact',[FrontendController::class, 'contact'])->name('frontend-contact');
Route::get('/career',[FrontendController::class, 'career'])->name('frontend-career');
Route::get('/complete-projects',[FrontendController::class, 'completeProjects'])->name('frontend-complete-projects');
Route::get('/ongoing-projects',[FrontendController::class, 'runningProjects'])->name('frontend-running-projects');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend-policy');
Route::get('/our-portfolio/{id}', [FrontendController::class, 'portfolioPage'])->name('frontend-portfolio');
Route::get('/dubai-office', [FrontendController::class, 'dubaiOffice'])->name('frontend-dubai-office');
Route::get('/our-gallery', [FrontendController::class, 'ourGallery'])->name('frontend-gallery');
Route::get('/company-profile', [FrontendController::class, 'companyProfile'])->name('frontend-company-profile');

Route::get('/admin',[AdminController::class, 'index'])->name('admin');

Route::get('/company-info', [CompanyProfileController::class, 'CompanyProfileInfoPage'])->name('company-profile-info');
Route::post('company/update/', [CompanyProfileController::class, 'CompanyProfileUpdateRequest'])->name('company-profile-update');
Route::get('company/description-update', [CompanyProfileController::class, 'CompanyProfileDescriptionUpdate'])->name('description-update');
Route::post('company/description-update/request', [CompanyProfileController::class, 'CompanyProfileDescriptionUpdateRequest'])->name('update-company-description');

Route::get('/company/event-info/add-ui', [EventController::class, 'CompanyNewEventAddUi'])->name('event-add-ui');
Route::post('/company/event-info/add', [EventController::class, 'CompanyNewEventAddRequest'])->name('event-add-request');
Route::get('/company/event-info/delete/{id}', [EventController::class, 'CompanyEventInfoDelete'])->name('event-info-delete');

Route::get('/company/job-circular/add-ui', [CompanyProfileController::class, 'JobCircularAddUI'])->name('job-circular-add-ui');
Route::post('/company/job-circular/insert', [CompanyProfileController::class, 'JobCircularAddRequest'])->name('job-circular-add');
Route::get('/company/job-circular/edit-ui/{id}', [CompanyProfileController::class, 'JobCircularEditUi'])->name('job-circular-edit-ui');
Route::post('/company/job-circular/update-request', [CompanyProfileController::class, 'JobCircularUpdateRequest'])->name('job-circular-update');
Route::get('/company/job-circular/delete/{id}', [CompanyProfileController::class, 'JobCircularDeleteRequest'])->name('job-circular-delete');

Route::get('/company/project/add-ui', [ProjectInfoController::class, 'companyProjectAddUI'])->name('project-add-ui');
Route::post('/company/project/insert', [ProjectInfoController::class, 'companyProjectInsertRequest'])->name('project-add');
Route::get('/company/project/edit-ui/{id}', [ProjectInfoController::class, 'companyProjectInfoEditUI'])->name('project-info-edit');
Route::post('/company/project/update-request', [ProjectInfoController::class, 'companyProjectInfoUpdateRequest'])->name('project-info-update');

Route::get('company/project/image/upload-ui', [ProjectInfoController::class, 'companyProjectImageUpload'])->name('project-image');
Route::post('company/project/image/insert', [ProjectInfoController::class, 'companyProjectImageUploadRequest'])->name('project-image-upload');

Route::post('company/job/applicant/new-apply', [JobApplicantInfoController::class, 'insertNewJobApplicantInformation'])->name('new.job.applicant.apply');
Route::get('/company/all-applicants/ui-list', [JobApplicantInfoController::class, 'AllJobApplicantListUi'])->name('all-applicants-ui');
Route::get('/company/all-applicants/cv-download/{id}', [JobApplicantInfoController::class, 'JobApplicantCVDownloadRequest'])->name('download-applicant-cv');
Route::get('/company/all-applicants/cv-view/{id}', [JobApplicantInfoController::class, 'JobApplicantCVViewRequest'])->name('view-applicant-cv');

