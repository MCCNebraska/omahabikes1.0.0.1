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
    return view('login');
});

Route::get('/volunteerWelcome', function () {
    return view('volunteerWelcome');
});

Route::get('/chooseEvent', function () {
    return view('chooseEvent');
});

Route::get('/startEvent', function () {
    return view('startEvent');
});

Route::get('/bikerSignin', function () {
    return view('bikerSignin');
});

Route::get('/bikerStatus', function () {
    return view('bikerStatus');
});

Route::get('/checkin', function () {
    return view('checkin');
});

Route::get('/inventory', function () {
    return view('inventory');
});

Route::get('/newRegistration', function () {
    return view('newRegistration');
});

Route::get('/newVolunteer', function () {
    return view('newVolunteer');
});

Route::get('/termsOfUse', function () {
    return view('termsOfUse');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






