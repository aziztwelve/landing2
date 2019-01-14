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


Route::get('/politics', function () {
    return view('politics');
});
Route::get('/back', function () {
    return view('back');
});
Route::get('/backcharge2', function () {
    return view('back2');
});
Route::get('/backcharge3', function () {
    return view('back3');
});
Route::get('/backpulse3', function () {
    return view('back4');
});
Route::get('/backxtreme', function () {
    return view('back5');
});

Route::get('/', function () {
    return view('welcome3');
});

Route::get('/contact', ['as'=>'getContact','uses'=>'MailSetting@getContact']);

Route::post('/contact', ['as'=>'postContact','uses'=>'MailSetting@postContact']);
Route::post('/charge2', ['as'=>'postCharge2','uses'=>'MailSetting@postCharge2']);
Route::post('/charge3', ['as'=>'postCharge3','uses'=>'MailSetting@postCharge3']);
Route::post('/pulse3', ['as'=>'postPulse3','uses'=>'MailSetting@postPulse3']);
Route::post('/xtreme', ['as'=>'postXtreme','uses'=>'MailSetting@postXtreme']);
