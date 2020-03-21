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

Route::get('/rooms/show-room-staff/{id}', 'RoomController@showStaff')->name('rooms.show.staff');
Route::get('/rooms/my-room/{id}', 'RoomController@userRoom')->name('rooms.show.user');
Route::get('/rooms/my-room/{id}/packages','RoomController@roomPackages')->name('room.users.packages');
Route::get('/rooms/my-room/{room}/packages/{package}', 'PackageController@packageConfirm')->name('package.confirm');

Route::get('/rooms/my-room/{room}/report/create','ReportController@userCreateReport')->name('user.create.report');
Route::resource('/rooms','RoomController')->except([
    'index'
]);
Route::get('/rooms/types/{type}','RoomController@index')->name('rooms.index');

Route::post('/reports/repair/','ReportController@storeRepair')->name('reports.repair.store');

Route::get('/reports/search','ReportController@seachRoom')->name('reports.index.search');
Route::resource('/reports','ReportController');
Route::resource('/receipts','ReceiptController');

Route::resource('/requests','RequestController')->except([
    'create'
]);
Route::get('/requests/create/{room}','RequestController@create')->name('requests.create');


Route::resource('/packages','PackageController');


