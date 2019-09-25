<?php

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

Route::get('/', function () {
    return view('index');
});
// Route::get('userLogin','userloginController@userLogin');

// Route::get('userRegister','userloginController@userRegister');
// Route::get('userForgetPass','userloginController@userForgetPass');

// Route::get('register','userloginController@register');
Route::get('admin','UserLoginController@loginPage');

Route::get('adminLogin','UserLoginController@adminLogin');
Route::get('admin/dashboard','UserLoginController@dashboard');
Route::get('admin/logout','UserLoginController@logout');
Route::get('admin/qualification','QualificationController@index');//for qualification call
Route::get('admin/countries','CountriesController@index');        //for countries call
Route::get('admin/salary','SalaryController@index');              //for salary call
Route::get('admin/institute','InstituteController@index');        //for institute call
Route::get('admin/industries','IndustryController@index');         //for industries call
Route::get('admin/cms','CMSController@index');                      //For manages pages
Route::get('admin/pay_umo','Pay_UMO_Controller@index');             //for pages  call
Route::get('admin/visa_type','VisaTypeController@index');              //for visa type  call
Route::get('admin/team_members','TeamMemberController@index');        //for visa type  call
Route::get('admin/prohibited_keyword','ProhibitedController@index');        //for visa type  call







