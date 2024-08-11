<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SpinnerController;
use App\Http\Controllers\CampingController;
use App\Http\Controllers\BikeModelController;
use App\Http\Controllers\FormFieldsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PopupalertController;
use App\Http\Controllers\SitesettingController;



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


Route::get('/',[UserController::class,'login'])->name('login');
Route::get('/u/{user_name}',[FrontendController::class,'index']);
Route::post('/u/spinner_form/post',[FrontendController::class,'spinner_form']);
Route::post('/u/spinner_form_check/post',[FrontendController::class,'spinner_form_check']);
Route::post('/u/spinner_round_check',[FrontendController::class,'spinner_round_check']);
Route::post('/u/spinner_value_check',[FrontendController::class,'spinner_value_check']);
Route::get('/dummy',[FrontendController::class,'dummy']);

Route::get('login',[UserController::class,'login']);
Route::post('login_post',[UserController::class,'login_post']);
Route::get('logout',[UserController::class,'logout']);

Route::any('otp_verify_page',[UserController::class,'otp_verify_page']);
Route::any('otp_verify',[UserController::class,'otp_verify']);
Route::get('forgotPassword',[UserController::class,'forgotPassword']);
Route::post('adminUserIdCheck',[UserController::class,'adminUserIdCheck']);
Route::get('confirmPasswordPage/{adminKey}',[UserController::class,'confirmPasswordPage']);
Route::post('confirmPassword',[UserController::class,'confirmPassword']);
Route::get('changePassword',[UserController::class,'changePassword']);
Route::post('updatePassword',[UserController::class,'updatePassword']);



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [UserController::class,'dashboard']);
    Route::get('profile', [UserController::class,'profile']);
    Route::post('profile_update', [UserController::class,'profile_update']);
    Route::get('logout', [UserController::class,'logout']);
    Route::any('sub_user_list', [UserController::class,'sub_user_list']);
    Route::get('add_sub_user_page', [UserController::class,'add_sub_user_page']);
    Route::any('user_name_checking', [UserController::class,'user_name_checking']);
    Route::post('add_sub_user', [UserController::class,'add_sub_user']);
    Route::post('downloadUserPdf', [UserController::class,'downloadUserPdf']);
    Route::get('edit_sub_user/{id}', [UserController::class,'edit_sub_user']);
    Route::get('delete_sub_user/{id}', [UserController::class,'delete_sub_user']);
    Route::get('expiry_sub_user', [UserController::class,'expiry_sub_user']);
    Route::get('profile', [UserController::class,'profile']);
    Route::post('profile_update', [UserController::class,'profile_update']);
    Route::get('dashboard_visit/{id}', [UserController::class,'dashboard_visit']);


    // ----------------- UserController ------------------------
    Route::any('ip_skip', [UserController::class,'ip_skip']);
    Route::get('add_ip_skip_page', [UserController::class,'add_ip_skip_page']);
    Route::post('add_ip_skip', [UserController::class,'add_ip_skip']);
    Route::post('downloadCampaignPdf', [UserController::class,'downloadCampaignPdf']);
    Route::get('edit_ip_skip/{id}', [UserController::class,'edit_ip_skip']);
    Route::get('delete_ip_skip/{id}', [UserController::class,'delete_ip_skip']);
    // ----------------- UserController End------------------------


    // ----------------- Camping ------------------------
    Route::any('camping_list', [CampingController::class,'camping_list']);
    Route::any('expired_camping_list', [CampingController::class,'expired_camping_list']);
    Route::get('add_camping_page', [CampingController::class,'add_camping_page']);
    Route::post('add_camping', [CampingController::class,'add_camping']);
    Route::post('downloadCampaignPdf', [CampingController::class,'downloadCampaignPdf']);
    Route::get('edit_camping/{id}', [CampingController::class,'edit_camping']);
    Route::get('delete_camping/{id}', [CampingController::class,'delete_camping']);
    // ----------------- Camping End------------------------


    // ----------------- Bike ------------------------
    Route::any('bike_model', [BikeModelController::class,'bike_model']);
    Route::get('add_bike_page', [BikeModelController::class,'add_bike_page']);
    Route::post('downloadBikePdf', [BikeModelController::class,'downloadBikePdf']);
    Route::post('add_bike', [BikeModelController::class,'add_bike']);
    Route::get('edit_bike/{id}', [BikeModelController::class,'edit_bike']);
    Route::get('delete_bike/{id}', [BikeModelController::class,'delete_bike']);
    // ----------------- Bike End------------------------

    // ----------------- Form Fields Access ------------------------
    Route::any('form_access', [FormFieldsController::class,'form_access']);
    Route::post('form_access_post', [FormFieldsController::class,'form_access_post']);
    // ----------------- Form Fields Access End------------------------


    // ----------------- Spinner ------------------------
    Route::any('spinner_list', [SpinnerController::class,'spinner_list']);
    Route::get('add_spinner_page', [SpinnerController::class,'add_spinner_page']);
    Route::get('spinner_form', [SpinnerController::class,'spinner_form']);
    Route::post('add_spinner', [SpinnerController::class,'add_spinner']);
    Route::post('downloadSpinnerPdf', [SpinnerController::class,'downloadSpinnerPdf']);
    Route::get('edit_spinner/{id}', [SpinnerController::class,'edit_spinner']);
    Route::get('delete_spinner/{id}', [SpinnerController::class,'delete_spinner']);
    Route::any('spinner_form_camping_list', [SpinnerController::class,'spinner_form_camping_list']);
    Route::post('downloadFormCampingPdf', [SpinnerController::class,'downloadFormCampingPdf']);
    Route::post('downloadSpinnerFormListPdf', [SpinnerController::class,'downloadSpinnerFormListPdf']);
    Route::any('spinner_form_list/{id}', [SpinnerController::class,'spinner_form_list']);
    Route::any('spinner_form_details/{id}', [SpinnerController::class,'spinner_form_details']);
    Route::any('delete_spinner_form_list/{id}', [SpinnerController::class,'delete_spinner_form_list']);
    // ----------------- Spinner End------------------------

    // ----------------- notice Access ------------------------
    Route::any('notice', [NoticeController::class,'notice']);
    Route::post('add_notice', [NoticeController::class,'add_notice']);
    // ----------------- notice Access End------------------------


    // ----------------- sitesetting Access ------------------------
    Route::any('sitesetting', [SitesettingController::class,'sitesetting']);
    Route::post('add_sitesetting', [SitesettingController::class,'add_sitesetting']);
    // ----------------- sitesetting Access End------------------------


    // ----------------- popup_alert Access ------------------------
    Route::any('popup_alert', [PopupalertController::class,'popup_alert']);
    Route::post('add_popup_alert', [PopupalertController::class,'add_popup_alert']);
    // ----------------- popup_alert Access End------------------------


});

