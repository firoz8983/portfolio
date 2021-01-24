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
Route::get('/','HomeController@index');
Route::Post('/send-message','MessageController@message');

//admin routes-------
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@dashboard');
Route::post('admin-dashboard','AdminController@admindashboard');
Route::get('/messages','MessageController@ShowMessages');
