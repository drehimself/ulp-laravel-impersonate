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

Route::impersonate();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sensitive', 'HomeController@sensitive')->name('sensitive')->middleware('impersonate.protect');

// Route::get('/imp', function () {
//     $user = App\User::find(2);

//     auth()->user()->impersonate($user);

//     return view('home');
// });

// Route::get('/stop', function () {
//     auth()->user()->leaveImpersonation();

//     return view('home');
// });
