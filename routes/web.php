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
Route::get('/rooms/my-room/{room}/accept','UserController@acceptInvite')->name('accept');
Route::get('/rooms/my-room/{room}/deny','UserController@denyInvite')->name('deny');
Route::get('/rooms/my-room/{id}/packages','RoomController@roomPackages')->name('room.users.packages');
Route::get('/rooms/my-room/{room}/packages/{package}', 'PackageController@packageConfirm')->name('package.confirm');
Route::get('/rooms/my-room/{id}/buyCash','UserController@buyCashView')->name('buyCash');
Route::post('/rooms/my-room/{id}/buyCash','UserController@buyCashUpdate')->name('updateCash');

Route::get('/rooms/my-room/{room}/report/create','ReportController@userCreateReport')->name('user.create.report');
Route::get('/rooms/my-room/{room}/wifi','WifiCodeController@userBuyWifi')->name('room.user.wifi');
Route::get('/rooms/my-room/{room}/myStatements','UserStatementController@myStatements')->name('room.user.statement');
Route::post('/rooms/my-room/{room}/myStatements','UserStatementController@statementDayFix')->name('room.statement.day');
Route::get('/rooms/my-room/{room}/myStatements/back','UserStatementController@allStatement')->name('backToAll');
Route::get('/rooms/my-room/{room}/addRoommate','UserController@addRoommateView')->name('room.user.roommate');
Route::post('/rooms/my-room/{room}/addRoommate/add','UserController@sendInvite')->name('sendInvite');
Route::resource('/wifi','WifiCodeController');
Route::resource('/rooms','RoomController')->except([
    'index'
]);
Route::get('/rooms/types/{type}','RoomController@index')->name('rooms.index');
Route::get('/rooms/types/{type}/building/{building}','RoomController@indexBuilding')->name('rooms.index.building');
Route::get('/rooms/types/{type}/building/{building}/floor/{floor}','RoomController@indexBuildingFloor')->name('rooms.index.building.floor');


Route::post('/reports/repair/','ReportController@storeRepair')->name('reports.repair.store');
Route::get('/reports/building/{building}', 'ReportController@indexBuilding')->name('reports.index.building');
Route::get('/reports/building/{building}/floor/{floor}', 'ReportController@indexBuildingFloor')->name('reports.index.building.floor');

Route::get('/reports/search','ReportController@seachRoom')->name('reports.index.search');
Route::resource('/reports','ReportController');
Route::resource('/receipts','ReceiptController');
Route::post('/receipts/create/process','ReceiptController@billCreateShowReport')->name('receipt.show.report');

Route::resource('/requests','RequestController')->except([
    'create'
]);
Route::get('/requests/{type}', 'RequestController@indexType')->name('requests.index.type');
Route::get('/requests/{type}/building/{building}', 'RequestController@indexBuilding')->name('requests.index.building');
Route::get('/requests/{type}/building/{building}/floor/{floor}', 'RequestController@indexBuildingFloor')->name('requests.index.building.floor');
Route::get('/requests/create/{room}','RequestController@create')->name('requests.create');
Route::get('/requests/{request}/update/admin-confirm','RequestController@updateConfirm')->name('requests.admin.confirm');


Route::resource('/packages','PackageController');

