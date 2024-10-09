<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('rockhill');
});

Route::get('/vigord', function () {
    return view('welcome');
});

Route::get('/tupelohighschool', function () {
    return view('tupelohighschool');
});

Route::get('/barbehighschool', function () {
    return view('barbehighschool');
});




Route::get('/transcript', function () {
    return view('transcript');
});
Route::get('/transcriptchatgpt', function () {
    return view('transcriptchatgpt');
});


Route::get('/jamesclemes', function () {
    return view('jamesclemes');
});


Auth::routes();

Route::get('laramail/send', 'EmailController@sendEmail');
