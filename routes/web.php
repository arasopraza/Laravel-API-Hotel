<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\String_;

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

Route::get('/', 'PagesController@home');
Route::get('/hotel', 'PagesController@hotel');
Route::get('/pesawat', 'PagesController@pesawat');

Route::post('/hasil', 'PagesController@query');
// Route::post('/proses', 'PagesController@proses');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
