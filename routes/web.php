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
Route::post('/sellMail', "App\Http\Controllers\MailsController@sellMail")->name('sellMail');
Route::post('/buyMail', "App\Http\Controllers\MailsController@buyMail")->name('buyMail');


/** EMAILS  */
Route::get('/econfirmcode', "App\Http\Controllers\HomeController@econfirmcode");
Route::get('/sellorder', "App\Http\Controllers\HomeController@sellorder");
Route::get('/buyorder', "App\Http\Controllers\HomeController@buyorder");
Route::get('/ewelcome', "App\Http\Controllers\HomeController@ewelcome");
Route::get('/everifysuccess', "App\Http\Controllers\HomeController@everifysuccess");

/** Dashboard  */
Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard");
Route::get('/pref', "App\Http\Controllers\dcontroller@pref");
Route::get('/linked', "App\Http\Controllers\dcontroller@linked");
Route::get('/settings', "App\Http\Controllers\dcontroller@settings");
Route::get('/transaction', "App\Http\Controllers\dcontroller@transaction");
Route::get('/verification', "App\Http\Controllers\dcontroller@verification");
Route::get('/admindash', "App\Http\Controllers\dcontroller@admindash");
Route::get('/rate', "App\Http\Controllers\dcontroller@rate");
Route::get('/adminsettings', "App\Http\Controllers\dcontroller@adminsettings");
Route::get('/addbtc', "App\Http\Controllers\dcontroller@addbtc");
Route::get('/editbtc', "App\Http\Controllers\dcontroller@editbtc");
Route::get('/adminverification', "App\Http\Controllers\dcontroller@adminverification");
Route::get('/adminconfirm', "App\Http\Controllers\dcontroller@adminconfirm");
Route::get('/buyinvoice', "App\Http\Controllers\dcontroller@buyinvoice");
Route::get('/sellinvoice', "App\Http\Controllers\dcontroller@sellinvoice");
Route::get('/addbk', "App\Http\Controllers\dcontroller@addbk");
Route::resource('/linked', "App\Http\Controllers\linkedController");
Route::resource('/address', "App\Http\Controllers\AddressController");
Route::resource('/purchases', "App\Http\Controllers\PurchaseController");
Route::resource('/sales', "App\Http\Controllers\SalesController");
Route::resource('/histories', "App\Http\Controllers\HistoryController");
Route::get('/accept_payment/{id}', "App\Http\Controllers\dController@acceptPayment")->name('accept_payment');
Route::post('/verify_user', "App\Http\Controllers\dController@verifyUser")->name('verify_user');
Route::get('/verify_page', "App\Http\Controllers\dController@verifyPage")->name('verify_page');


/**Auth Route Both */
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', "App\Http\Controllers\dcontroller@dashboard")->name('dashboard');
    Route::resource('/rates', "App\Http\Controllers\RateController");
    Route::get('/banks/kill/{id}', "App\Http\Controllers\linkedController@banks_kill")->name('bank.kill');
});


require __DIR__.'/auth.php';
