<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', "App\Http\Controllers\HomeController@home");
Route::get('/rate', "App\Http\Controllers\HomeController@rate");
Route::get('/about', "App\Http\Controllers\HomeController@about");
Route::get('/howtobuy', "App\Http\Controllers\HomeController@howtobuy");
Route::get('/howtosell', "App\Http\Controllers\HomeController@howtosell");
Route::get('/terms', "App\Http\Controllers\HomeController@terms");


/** Dashboard  */
Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard");
Route::get('/pref', "App\Http\Controllers\dcontroller@pref");
Route::get('/linked', "App\Http\Controllers\dcontroller@linked");
Route::get('/settings', "App\Http\Controllers\dcontroller@settings");
Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");
Route::get('/verification', "App\Http\Controllers\dcontroller@verification");
Route::get('/admindash', "App\Http\Controllers\dcontroller@admindash");
Route::get('/rate', "App\Http\Controllers\dcontroller@rate");



/**Auth Route Both */
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard")->name('dashboard');
    Route::resource('/rates', "App\Http\Controllers\RateController");
});


require __DIR__.'/auth.php';
