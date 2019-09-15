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




Route::get('/', function(){
	return view('welcome');
});

Route::get('/qr/{id}', 'QRController@qr');

Route::post('/transaction', 'TransactionController');


// Send Email

Route::post('send-email', 'EmailController@send')->name('send.mail');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
