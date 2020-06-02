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

Route::get('/', 'Welcome')->name("welcome");

Auth::routes(config('auth.options') ?? []);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/messages', 'MessageController@index');
Route::get('/portal', 'PortalController@index');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('settings/profile', 'Settings\ProfileController@edit')->name('profile.edit');
Route::put('settings/profile', 'Settings\ProfileController@update')->name('profile.update');
Route::get('perfil', 'ProfileController@perfil');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::get('login', [
        'middleware' => 'admin.guest',
        'as' => 'login',
        'uses' => 'AuthController@showLoginForm']);

    Route::post('login', [
        'as' => 'login.post',
        'uses' => 'AuthController@login']);

    Route::get('consumers', [
        'as' => 'consumers',
        'uses' => 'ConsumerController@consumers']);

    Route::post('logout', [
        'as' => 'logout',
        'uses' => 'AuthController@logout']);

    Route::get('/', [
        'as' => 'home',
        'uses' => 'AdminController@index']);
});
