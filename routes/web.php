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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('layouts.pages');
    });

    Route::get('test',function(){
        return view('test');
    });
    Route::get('/pravila',function(){
        return view('pages.pravila');
    });
    Route::post('/userprofile', 'Pages\UserController@userprofilePost')->name('userprofile');

});




Auth::routes();

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout');

Route::prefix('admin')->group(function(){
    Route::get('/home', 'Admin\AdminController@index')->name('admin.home');
    Route::get('/login', 'Admin\AdminLoginController@adminLoginForm')->name('admins.login');
    Route::post('/login', 'Admin\AdminLoginController@adminLoginPost')->name('admin.login.submit');
    Route::get('/register', 'Admin\AdminRegisterController@register')->name('admin.register');
    Route::post('/register', 'Admin\AdminRegisterController@registerPost')->name('admins.register');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admins.logout');

    Route::get('password/reset', 'Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admins.password.request');

    Route::post('password/email', 'Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admins.password.email');
    Route::get('password/reset/{token}', 'Admin\AdminResetPasswordController@showResetForm')->name('admins.password.reset');
    Route::post('password/reset', 'Admin\AdminResetPasswordController@reset');

    Route::get('/services', 'Admin\AdminController@services')->name('admin.services');
    Route::post('/service', 'Admin\AdminController@servicesAddPost')->name('admin.service');
    Route::get('/service-add', 'Admin\AdminController@servicesAdd')->name('admin.serviceadd');
    Route::get('/service-edit/{id}', 'Admin\AdminController@servicesEdit')->name('admin.serviceedit');
    Route::post('/service-edit', 'Admin\AdminController@servicesEditPost')->name('admin.serviceedit');

   // Route::get('/service-listt', 'Admin\AdminController@services')->name('admin.servicelist');

});


