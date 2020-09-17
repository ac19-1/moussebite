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

Route::get('/', 'PageController@homePage');
Route::get('/login', 'PageController@loginPage');
Route::get('/register', 'PageController@registerPage');
Route::get('/about', 'PageController@aboutPage');
Route::get('/cart', 'PageController@cartPage');
Route::get('/mousse/detail/{id}', 'PageController@detailPage');
Route::get('/mousse', 'PageController@moussePage');