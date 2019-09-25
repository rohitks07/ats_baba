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
    return view('job_employer');
});

Route::get('jobseeker',function(){
	return view('web.jobseeker'); 
}
);
Route::get('test',function(){
    return view('test');
});
// Route::get('userLogin','userloginController@userLogin');

// Route::get('userRegister','userloginController@userRegister');
// Route::get('userForgetPass','userloginController@userForgetPass');

// Route::get('register','userloginController@register');
Route::get('admin','userloginController@loginPage');

Route::get('adminLogin','userloginController@adminLogin');
Route::get('admin/dashboard','userloginController@dashboard');
Route::get('admin/logout','userloginController@logout');
Route::get('admin/cities','CityController@index');

Route::get('admin/qualification','QualificationController@index');
Route::post('admin/qualification/add','QualificationController@add_qualification');
Route::post('admin/qualification/edit','QualificationController@edit_qualification');
Route::get('admin/qualification/delete/{id}','QualificationController@delete_qualification');

Route::get('admin/institute','InstituteController@index');
Route::get('admin/institute/add','InstituteController@add_institute');
Route::get('admin/institute/edit','InstituteController@edit_institute');

Route::get('admin/visa_type','VisaTypeController@index');
Route::post('admin/visa_type/add','VisaTypeController@add_visa_type');
Route::post('admin/visa_type/edit','VisaTypeController@edit_visa_type');
Route::get('admin/visa_type/delete/{id}','VisaTypeController@delete_visa_type');


Route::get('admin/page_management','CMSController@index');               //For manages pages
Route::post('admin/page_management/add','CMSController@add');
Route::get('admin/page_management/edit','CMSController@edit');
Route::get('admin/page_management/delete/{id}','CMSController@delete');
Route::get('cms/{pagehead}','CMSController@pagecontent');

Route::get('employer/post_new_contacts','ContactController@index');
Route::post('employer/post_new_contacts/add','ContactController@add');
Route::get('employer/my_posted_contacts','ContactController@show');
Route::get('employer/my_posted_contacts/delete/{id}','ContactController@delete');
Route::post('employer/post_new_email_contact/add','ContactController@add_email_form');
Route::get('employer/post_new_email_contact/show','ContactController@show_email_form');
Route::get('employer/my_posted_contacts/delete_email/{id}','ContactController@delete_email');
Route::get('employer/my_posted_contacts/delete_email_list/{id}','ContactController@delete_email_list');





Route::post('admin/cities/add','CityController@add_cities');
Route::post('admin/cities/edit','CityController@edit_cities');
Route::get('admin/cities/delete/{id}','CityController@delete');

Route::get('admin/countries','CountriesController@index');//for countries call
Route::get('admin/countries/add','CountriesController@add_countries');    

Route::get('admin/salary','SalaryController@index'); 
Route::get('admin/salary/edit','SalaryController@edit_salary');
Route::post('admin/salary/add','SalaryController@add');  
         
Route::get('admin/industries','IndustryController@index');         //for industries call

Route::get('admin/pay_umo','Pay_UMO_Controller@index');             //for pages  call
Route::get('admin/team_members','TeamMemberController@index');        //for visa type  call
Route::get('admin/prohibited_keyword','ProhibitedController@index');        //for visa type
Route::get('admin/job_employer',function ()
{
	return view('job_employer');
});
