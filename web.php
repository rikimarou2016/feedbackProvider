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

Route::get('/','PagesController@gethomepage' );

Route::get('loginpage','PagesController@getloginpage' );

Route::get('dashboardpage','PagesController@getdashboardpage' );

Route::get('menupage','PagesController@getmenupage' );

Route::get('Templatepage','PagesController@getTemplatepage' );

Route::get('templateSelection','PagesController@gettemplateSelection' );

Route::get('assignTemplatepage','PagesController@getassignTemplatepage' );






Route::resource('Staffmember', 'StaffmemberController');

Route::resource('/template', 'templateController');

Route::resource('/templateSelect', 'assignTemplatepageController');

Route::resource('/result', 'resultController');




Route::post('/loginme','LoginController@login');


