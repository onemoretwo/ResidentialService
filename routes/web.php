<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/information', 'HomeController@information')->name('home.information');
Route::get('/gallery', 'HomeController@gallery')->name('home.gallery');
Route::get('/neighborhood', 'HomeController@neighborhood')->name('home.neighborhood');

Route::get('/register-rental', 'LeaseController@register')->name('leases.register');

Route::resource('/rooms','RoomController');
Route::resource('/reports','ReportController');
Route::resource('/receipts','ReceiptController');
Route::resource('/requests','RequestController');
Route::resource('/packages','PackageController');
Route::get('/rooms/myroom/1', function () {
    return view('rooms.myroom');
});


