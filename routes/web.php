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
    return view('landing_page');
})->middleware('check_validation');

Auth::routes();

Route::get('/service', 'website_controller@service')->name('service');
Route::get('/about-us', 'website_controller@about_us')->name('about-us');
Route::get('/news', 'website_controller@news')->name('news');
Route::get('/consultant', 'website_controller@consultant')->name('consultant');
Route::get('/contact-us', 'website_controller@contact_us')->name('contact-us');
Route::get('/login-register', 'website_controller@login_register')->name('/login-register');
Route::post('/register-agency', 'website_controller@register_agency')->name('register-agency');
Route::get('/view-agency-name', 'agency_controller@view_agency_name')->name('view-agency-name');

Route::get('/active-slider', 'website_controller@active_slider')->name('active-slider'); 
Route::get('/edit-agency-rate', 'agency_controller@edit_agency_rate')->name('edit-agency-rate');
Route::post('/update-agency-rate', 'agency_controller@update_agency_rate')->name('update-agency-rate');
Route::get('/view-master-form', 'master_form_controller@view_master_form')->name('view-master-form');
Route::post('/add-master-form', 'master_form_controller@add_master_form')->name('add-master-form');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view-app-list', 'master_form_controller@view_app_list')->name('view-app-list');

Route::get('/check-passport-no', 'master_form_controller@check_passport_no')->name('check-passport-no');
Route::get('/view-medical-form', 'master_form_controller@view_medical_form')->name('view-medical-form');
Route::post('/add-medical-form', 'master_form_controller@add_medical_form')->name('add-medical-form');
Route::get('/get-medical-code', 'master_form_controller@get_medical_code')->name('get-medical-code');
Route::get('/edit-medical', 'master_form_controller@edit_medical')->name('edit-medical');
Route::post('/update-medical-form', 'master_form_controller@update_medical_form')->name('update-medical-form');
Route::get('/delete-medical-item', 'master_form_controller@delete_medical_item')->name('delete-medical-item');

Route::post('/add-agency-form', 'agency_controller@add_agency_form')->name('add-agency-form');

Route::get('/edit-agency', 'agency_controller@edit_agency')->name('edit-agency');

Route::get('/barcode-generator', 'agency_controller@barcode_generator')->name('barcode-generator');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
