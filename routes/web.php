<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
//login for users

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logins', 'Users1Controller@index');
Route::post('/logging', 'Users1Controller@store');
Route::get('/register_please', 'Users1Controller@create');
Route::post('/registration_process', 'Users1Controller@store1');
//Route::get('/notices1', 'NoticeController@index1');
//Route::get('/notices2', 'NoticeController@index2');
//Route::get('/notices3/{id}', 'NoticeController@index3');
//Route::get('/notices4', 'NoticeController@index4');
//Route::get('/notices5', 'NoticeController@index5');
//Route::get('/notices6', 'NoticeController@index6');
//Route::get('/notices7', 'NoticeController@index7');
//Route::get('/notices8', 'NoticeController@index8');
Route::get('/profile/{id}','Users1Controller@profile');
Route::post('/update_user/{id}','Users1Controller@update');
Route::get('/logout', function () {
    return view('login');
});



Auth::routes();


//login for admins
Route::get('/admin', 'AdminsController@index');
Route::get('/admin_create', 'AdminsController@create');
Route::post('/display_admin', 'AdminsController@store');

Route::post('/admin_login', 'AdminsController@store1');
Route::get('/admin_login1', 'AdminsController@index2');
Route::get('/admin_home/{dept}', 'AdminsController@show3');
Route::get('/profile_admin/{id}','AdminsController@profile');
Route::post('/update_admin/{id}','AdminsController@update');
Route::get('/logout1', function () {
    return view('admin_login');
});


//for notices
Route::get('/news_add/{id}','AdminsController@show4');
Route::post('/notice_store/{id}','NoticeController@store');
Route::get('/notices_general','NoticeController@show');
Route::get('/notices_dept/{id}','Users1Controller@show1');
Route::post('/dept_notice/{dept}','NoticeController@show1');
Route::get('/update_news/{id}','AdminsController@show2');
Route::post('/up_dept_notice/{dept}','NoticeController@show2');
Route::get('/update_note/{id}','NoticeController@edit');
Route::post('/update_info/{id}','NoticeController@update');
Route::get('/delete_note/{id}','NoticeController@destroy');


//for complaints
Route::get('/complaint_register','ComplaintController@index');
Route::post('/submit_complaint','ComplaintController@store');
Route::get('/complaint_view/{id}','AdminsController@show3');
Route::post('/dept_complaints/{id}','ComplaintController@show');
Route::get('/database','ComplaintController@show2');
Route::get('/delete_complaint/{id}','ComplaintController@destroy');

//database
Route::get('/users','Users1Controller@show');
Route::get('/adminss','AdminsController@show');

Route::get('/delete_user/{id}','Users1Controller@destroy');
Route::get('/delete_admin/{id}','AdminsController@destroy');
