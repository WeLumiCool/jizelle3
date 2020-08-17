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
Route::post('/send','HomeController@send')->name('send');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/terms_of_use', function () {
    return view('terms_of_use');
})->name('terms_of_use');



//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
