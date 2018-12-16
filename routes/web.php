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
Route::get('/', function(){
    return view('index');
});

Route::prefix('admin')->group(function (){
    Route::post('submitNewEmployee','HomeController@addEmployee')->name('employer.employee.submit');

});

Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'EmployeeController@index')->name('admin.home');
    Route::get('/dashboard', 'EmployeeController@index')->name('admin.home');
});