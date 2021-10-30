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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', "App\Http\Controllers\HomeController@home");
Route::get('/rate', "App\Http\Controllers\HomeController@rate");


/** Dashboard  */
Route::get('/superdash', "App\Http\Controllers\dcontroller@superdash");
Route::get('/pref', "App\Http\Controllers\dcontroller@pref");
Route::get('/linked', "App\Http\Controllers\dcontroller@linked");
Route::get('/settings', "App\Http\Controllers\dcontroller@settings");
Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
