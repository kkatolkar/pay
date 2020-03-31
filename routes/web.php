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

//activateTsosologo//
Route::get('/activate','ActivatetsosologoController@index')->name('activate');

//contact//
Route::get('/contactus','ContactController@index')->name('contactus');
Route::post('/savecontact','ContactController@save')->name('contactsave');

//Customer KYC//
Route::get('/customerkyc','CustomerkycController@index')->name('customerkyc');

//Edit Policy//
Route::get('/editpolicy','EditpolicyController@index')->name('editpolicy');

//Get a Qoute//
Route::get('/getaquote','GetquoteController@index')->name('getaquote');

//Redo Payment//
Route::get('/redopayment','RedopaymentController@index')->name('redopayment');

//Report issue//
Route::get('/reportissue','ReportissueController@index')->name('reportissue');
Route::post('/savereportissue','ReportissueController@store')->name('reportsave');


//Vehicle Preinspection//
Route::get('/vehiclepreinspection','VehiclepreinspectionController@index')->name('vehiclepreinspection');
