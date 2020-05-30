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

Route::get('/', 'Welcome');

Auth::routes(config('auth.options') ?? []);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/messages', 'MessageController@index');
Route::get('/portal', 'PortalController@index');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('settings/profile', 'Settings\ProfileController@edit')->name('profile.edit');
Route::put('settings/profile', 'Settings\ProfileController@update')->name('profile.update');
Route::get('perfil', 'ProfileController@perfil');


Route::group(['middleware'    => ['web']
], function () {

    Route::get('/admin/login', 'Admin\AuthController@showLoginForm');
    Route::post('/admin/login', 'Admin\AuthController@login');
    Route::post('/admin/logout', 'Admin\AuthController@logout_admin');

    Route::get('/admin', 'AdminController@index');


});



