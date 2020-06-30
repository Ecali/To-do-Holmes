<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', 'Dashboard\Home')->name('home');
Route::get('/protetta', 'HomeController@index')->name('protetta');
Route::get('/task', 'Task\Home')->name('task');