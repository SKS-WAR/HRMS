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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'EmployeeController@dashboard')->name('dashboard');

Route::get('/create', 'EmployeeController@createEmpGet')->name('create');
Route::post('/create', 'EmployeeController@createEmpPost');

Route::get('/update', 'EmployeeController@updateEmpGet')->name('update');
Route::post('/update', 'EmployeeController@updateEmpPost');

Route::get('/view', 'EmployeeController@view')->name('view');

Route::get('/attendance', 'AttendanceController@updateAtdGet')->name('attendance');
Route::post('/attendance', 'AttendanceController@updateAtdPost');


Route::get('/calender', 'AttendanceController@caldenderGet')->name('calender');
Route::post('/calender', 'AttendanceController@caldenderPost');
