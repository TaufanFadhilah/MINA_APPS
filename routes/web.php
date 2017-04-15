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

//Plugin
Route::get('calendar',function(){
	return view('calendar');
});
Route::get('inbox',function(){
	return view('inbox');
});
Route::get('faq',function(){
	return view('faq');
});
//Session
Route::get('/createSession', 'SessionController@create');
Route::get('/destroySession', 'SessionController@destroy');

//Auth
Auth::routes();

//Dashboard
Route::get('/home', 'HomeController@index')->middleware('auth');

//Employees
Route::get('/listEmployees', 'EmployeesController@index')->middleware('auth');
Route::get('/deleteEmployees/{id}', 'EmployeesController@destroy')->middleware('auth');
Route::get('/createEmployees', 'EmployeesController@create')->middleware('auth');
Route::post('/postEmployees', 'EmployeesController@store')->middleware('auth');
Route::get('/showEmployees/{id}', 'EmployeesController@show')->middleware('auth');

//Schedules
Route::get('/listSchedules', 'SchedulesController@index')->middleware('auth');
Route::get('/deleteSchedules/{id}', 'SchedulesController@destroy')->middleware('auth');
Route::get('/createSchedules', 'SchedulesController@create')->middleware('auth');

//Supplier
Route::get('/listSuppliers', 'SuppliersController@index')->middleware('auth');
Route::get('/deleteSuppliers/{id}', 'SuppliersController@destroy')->middleware('auth');
Route::get('/createSuppliers', 'SuppliersController@create')->middleware('auth');

//Fish
Route::get('/listFishes', 'FishesController@index')->middleware('auth');
Route::get('/deleteFishes/{id}', 'FishesController@destroy')->middleware('auth');
Route::get('/createFishes', 'FishesController@create')->middleware('auth');

//Transaction
Route::get('/listTransactions', 'TransactionsController@index')->middleware('auth');
Route::get('/deleteTransactions/{id}', 'TransactionsController@destroy')->middleware('auth');
Route::get('/createTransactions', 'TransactionsController@create')->middleware('auth');