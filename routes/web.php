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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home')->name('home');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/paymentpending', function () {
    return view('paymentpending');
});
Route::get('/paymentdeclined', function () {
    return view('paymentdeclined');
});
//Paycontroller Routes//
Route::post('/pay','PayController@pay')->name('pay');

