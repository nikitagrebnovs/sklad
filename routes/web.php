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



Route::prefix('auth')->middleware('auth')->group(function (){
    Route::get('/', 'HomeController@show')->name('home.show');
    Route::get('/sign-out', 'Auth\HomeController@signOut')->name('sign-out');
    Route::get('/dashboard', 'DashboardController@show')->name('dashboard.show');
    Route::get('/objects', 'ObjectsController@show')->name('objects.show');
    Route::get('/objects/create', 'ObjectsController@create')->name('object.create');
    Route::post('/objects/new', 'ObjectsController@createNew')->name('object.createNew');
    Route::resource('profile', 'ProfileController');
    Route::resource('comment', 'CommentController');
});

Route::get('/', 'GuestController@login')->name('login');
Route::get('/register', 'GuestController@register')->name('register');
Route::post('/register', 'GuestController@registerRequest')->name('register.request');
Route::post('/', 'GuestController@loginCheck')->name('login.login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
