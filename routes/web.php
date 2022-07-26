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

Route::get('/', function () {return view('index');});
Route::get('/main', function () {return view('main');});
Route::get('/rooms', function () {return view('rooms');});
Route::get('/room-details', function () {return view('room-details');});
Route::get('/contact', function () {return view('contact');});
Route::get('/blog', function () {return view('blog');});
Route::get('/blog-details', function () {return view('blog-detail');});
Route::get('/about-us', function () {return view('about-us');});
