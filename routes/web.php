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

/* Route::get('/', function () {
    return view('guest.home');
}); */

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
    ->namespace('User')
    ->name('user.')
    ->prefix('user')
    ->group(function(){
        Route::get('/','HomeController@index')->name('home');
        Route::resource('/house', 'HouseController');
        Route::get('/message', function () {
            return view('user.house.message');})->name('message');
        Route::get('/sponsor', function () {
            return view('user.house.sponsor');})->name('sponsor');
    });




Route::get('{any?}', function(){
        return view('guest.home');
    })->where('any','.*');


