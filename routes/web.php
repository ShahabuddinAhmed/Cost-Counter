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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/info', 'UserController@info');
Route::get('/jan', 'UserController@viewinfo1');
Route::get('/feb', 'UserController@viewinfo2');
Route::get('/mar', 'UserController@viewinfo3');
Route::get('/apr', 'UserController@viewinfo4');
Route::get('/may', 'UserController@viewinfo5');
Route::get('/jun', 'UserController@viewinfo6');
Route::get('/jul', 'UserController@viewinfo7');
Route::get('/aug', 'UserController@viewinfo8');
Route::get('/sep', 'UserController@viewinfo9');
Route::get('/oct', 'UserController@viewinfo10');
Route::get('/nov', 'UserController@viewinfo11');
Route::get('/dec', 'UserController@viewinfo12');


// Authentication Routes...
Route::post('/update', 'AdminController@adminUpdate');
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

// Registration Routes...
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');

// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'Admin\ResetPasswordController@reset');
