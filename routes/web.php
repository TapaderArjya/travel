<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageContoller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FrontpanelController;
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

/* Front panel pages for users*/
Route::get('/service', function () {
    return view('frontpanel/service');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontpanel/home');
});
Route::get('/useredit', function () {
    return view('frontpanel/useredit');
});
Route::get('/about', function () {
    return view('frontpanel/about');
});
Route::get('/service', function () {
    return view('frontpanel/service');
});
Route::get('/package', function () {
    return view('frontpanel/package');
});
Route::get('/destination', function () {
    return view('frontpanel/destination');
});
Route::view('booking','frontpanel/booking')->middleware('usercheck');

Route::get('/team', function () {
    return view('frontpanel/team');
});
Route::get('/testimonial', function () {
    return view('frontpanel/testimonial');
});
Route::get('/404', function () {
    return view('frontpanel/404');
});
Route::get('/contact', function () {
    return view('frontpanel/contact');
});
Route::get('/tour_booking', function () {
    return view('frontpanel/tour_booking');
});
Route::get('/packagedetails', function () {
    return view('frontpanel/packagedetails');
});

Route::get('/register', function () {
    return view('frontpanel/register');
});
Route::get('/change_password', function () {
    return view('frontpanel/change_password');
});
Route::get('/tour_history', function () {
    return view('frontpanel/tour_history');
});
Route::get('/my_issue', function () {
    return view('frontpanel/my_issue');
});
Route::get('/terms_condition', function () {
    return view('frontpanel/terms_condition');
});



Route::view('getuser','singlepage');
Route::post('savedata',[MyController::class,'savedata']);
Route::post('querydata',[MyController::class,'querydata']);


/*Admin view pages*/
Route::get('/admin_log', function () {
    return view('adminpanel/admin_log');
});

Route::view('add_admin','adminpanel/add_admin')->middleware('checklogin');

Route::view('admin_home','adminpanel/home')->middleware('checklogin');

Route::view('admin_profile','adminpanel/admin_profile')->middleware('checklogin');

Route::view('admin_home','adminpanel/home')->middleware('checklogin');

Route::view('user_list','adminpanel/user_list')->middleware('checklogin');

Route::view('total_booking_list','adminpanel/total_booking_list')->middleware('checklogin');

Route::view('sliders-add','adminpanel/sliders-add')->middleware('checklogin');

Route::view('sliders_list','adminpanel/sliders_list')->middleware('checklogin');

Route::view('sliders_edit','adminpanel/sliders_edit')->middleware('checklogin');

Route::view('package-add','adminpanel/package-add')->middleware('checklogin');

Route::view('package_list','adminpanel/package_list')->middleware('checklogin');

Route::view('packages_edit','adminpanel/packages_edit')->middleware('checklogin');

Route::view('about_add','adminpanel/about_add')->middleware('checklogin');

Route::view('about_edit','adminpanel/about_edit')->middleware('checklogin');

Route::view('about_list','adminpanel/about_list')->middleware('checklogin');

Route::view('testimonial-add','adminpanel/testimonial-add')->middleware('checklogin');

Route::view('testimonial_list','adminpanel/testimonial_list')->middleware('checklogin');

Route::view('testimonial_edit','adminpanel/testimonial_edit')->middleware('checklogin');

Route::view('issue_list','adminpanel/issue_list')->middleware('checklogin');

Route::view('enquery_list','adminpanel/enquery_list')->middleware('checklogin');

Route::view('admin_reply','adminpanel/admin_reply')->middleware('checklogin');


/*  Admin page all listing including login & logout  start*/
Route::post('new_admin',[AdminController::class,'new_admin'])->middleware('checklogin');
Route::post('admin_login',[AdminController::class,'admin_login']);
Route::get('admin_logout',[AdminController::class,'admin_logout'])->middleware('checklogin');
Route::get('admin_edit/{id}',[AdminController::class,'admin_edit'])->middleware('checklogin');
Route::post('adminedit',[AdminController::class,'adminedit'])->middleware('checklogin');

Route::get('cnt',[AdminController::class,'cnt'])->middleware('checklogin');
Route::get('user_listing',[AdminController::class,'user_listing'])->middleware('checklogin');
Route::get('total_book_listing',[AdminController::class,'total_book_listing'])->middleware('checklogin');
Route::get('selc_book_listing/{email}',[AdminController::class,'selc_book_listing'])->middleware('checklogin');
Route::get('new_book_listing',[AdminController::class,'new_book_listing'])->middleware('checklogin');
Route::get('confirm_listing',[AdminController::class,'confirm_listing'])->middleware('checklogin');
Route::get('cancel_listing',[AdminController::class,'cancel_listing'])->middleware('checklogin');
Route::get('issue_listing',[AdminController::class,'issue_listing'])->middleware('checklogin');
Route::get('enquery_listing',[AdminController::class,'enquery_listing'])->middleware('checklogin');
Route::get('read_enquery_listing',[AdminController::class,'read_enquery_listing'])->middleware('checklogin');
Route::get('new_enquery_listing',[AdminController::class,'new_enquery_listing'])->middleware('checklogin');

/*  Admin page all listing including login & logout  start*/
Route::get('cancel_booking/{id}',[AdminController::class,'cancel_booking'])->middleware('checklogin');
Route::get('confirm_booking/{id}',[AdminController::class,'confirm_booking'])->middleware('checklogin');

Route::get('issue_reply/{id}',[AdminController::class,'issue_reply'])->middleware('checklogin');
Route::get('isuue_send',[AdminController::class,'isuue_send'])->middleware('checklogin');

Route::get('read_enquery/{id}',[AdminController::class,'read_enquery'])->middleware('checklogin');



/* booking cancel and confirm by admin */

/* slider function*/
Route::post('sliders_savedata',[AdminController::class,'sliders_savedata']);
Route::get('sliders_listdata',[AdminController::class,'sliders_listdata']);
Route::get('sliders_editdata/{id}',[AdminController::class,'sliders_editdata']);
Route::get('sliders_deletedata/{id}',[AdminController::class,'sliders_deletedata']);
Route::post('sliders_updatedata',[AdminController::class,'sliders_updatedata']);

/*packages function*/
Route::post('packages_savedata',[PackageContoller::class,'packages_savedata']);
Route::get('packages_listdata',[PackageContoller::class,'packages_listdata']);
Route::get('packages_editdata/{id}',[PackageContoller::class,'packages_editdata']);
Route::get('packages_deletedata/{id}',[PackageContoller::class,'packages_deletedata']);
Route::post('packages_updatedata',[PackageContoller::class,'packages_updatedata']);

/* About Function */
Route::post('about_savedata',[AboutController::class,'about_savedata']);
Route::get('about_listdata',[AboutController::class,'about_listdata']);
Route::get('about_editdata/{id}',[AboutController::class,'about_editdata']);
Route::get('about_deletedata/{id}',[AboutController::class,'about_deletedata']);
Route::post('about_updatedata',[AboutController::class,'about_updatedata']);

/* Testimonial Function*/
Route::post('testimonial_savedata',[TestimonialController::class,'testimonial_savedata']);
Route::get('testimonial_listdata',[TestimonialController::class,'testimonial_listdata']);
Route::get('testimonial_editdata/{id}',[TestimonialController::class,'testimonial_editdata']);
Route::get('testimonial_deletedata/{id}',[TestimonialController::class,'testimonial_deletedata']);
Route::post('testimonial_updatedata',[TestimonialController::class,'testimonial_updatedata']);


/*frontpanel functions */
Route::get('getdata',[FrontpanelController::class,'getdata']);
Route::get('packageinfo/{id}',[FrontpanelController::class,'packageinfo']);
Route::get('bookingdetails/{id}',[FrontpanelController::class,'bookingdetails'])->middleware('usercheck');;
Route::post('user_registration',[FrontpanelController::class,'user_registration']);
Route::post('sing_in',[FrontpanelController::class,'sing_in']);
Route::post('sing_up',[FrontpanelController::class,'sing_up']);
Route::get('logout',[FrontpanelController::class,'logout']);
Route::get('user_edit/{id}',[FrontpanelController::class,'user_edit']);
Route::post('user_update',[FrontpanelController::class,'user_update']);
Route::get('testimonial_get',[FrontpanelController::class,'testimonial_get']);

/*password change after sign_in*/
Route::get('edit_pwd/{id}',[FrontpanelController::class,'edit_pwd']);
Route::post('change_pwd',[FrontpanelController::class,'change_pwd']);

/*password change before sign_in*/
Route::get('edituser_password',[FrontpanelController::class,'edituser_password']);
Route::post('changeuser_password',[FrontpanelController::class,'changeuser_password']);

Route::post('bookdata',[FrontpanelController::class,'bookdata']);

Route::get('user_tour/{email}',[FrontpanelController::class,'user_tour']);
Route::get('raised_issue/{email}',[FrontpanelController::class,'raised_issue']);

Route::get('cancel/{id}',[FrontpanelController::class,'cancel']);

Route::post('query',[FrontpanelController::class,'query']);
Route::post('user_issue',[FrontpanelController::class,'user_issue']);
Route::post('user_enquery',[FrontpanelController::class,'user_enquery']);


