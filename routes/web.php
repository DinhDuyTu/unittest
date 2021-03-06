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
Route::get('/index', function () {
    return view('client.index');
})->name('home');

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('getLogin');

// Route::get('/login', function () {
    // return redirect('/');
// });

Auth::routes();

Route::get('calendars', 'Client\CalendarController@index');

