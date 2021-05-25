<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[ HomeController::class, 'getHome' ] )->name('home');
Route::get('/about',[ aboutController::class, 'getAbout' ] )->name('about');
Route::get('/contact',[ ContactController::class, 'getContact' ] )->name('contact');


Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit',[ MessagesController::class, 'submit' ] )->name('submit');
Route::get('/messages',[ MessagesController::class, 'getMessages' ] )->name('messages');
// Route::post('/contact/submit', 'MessagesController@submit');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
