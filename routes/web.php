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

Route::get('/', 'StartController@index');
Route::get('/road', 'StartController@index')->name('road');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/start', 'StartController@index')->name('start');
    Route::get('/profile/{id}', 'UserController@index')->name('profile');
});

//Road routes

Route::post('/start', 'StartController@store');

Route::post('/start/delete{id}', 'StartController@delete')->name('phrases.delete');

Route::post('/start/update/{id}', 'StartController@update')->name('phrases.update');

//Ticket routes
Route::get('/ticket', 'TicketController@index')->name('ticket');

Route::post('/ticket', 'TicketController@store');

Route::post('/ticket/delete{id}', 'TicketController@delete')->name('ticket.delete');

Route::post('/ticket/update/{id}', 'TicketController@update')->name('ticket.update');

//Rent routes
Route::get('/rent', 'RentController@index')->name('rent');

Route::post('/rent', 'RentController@store');

Route::post('/rent/delete{id}', 'RentController@delete')->name('rent.delete');

Route::post('/rent/update/{id}', 'RentController@update')->name('rent.update');

//Time routes
Route::get('/time', 'TimeController@index')->name('time');

Route::post('/time', 'TimeController@store');

Route::post('/time/delete{id}', 'TimeController@delete')->name('time.delete');

Route::post('/time/update/{id}', 'TimeController@update')->name('time.update');

//Airports routes
Route::get('/airport', 'AirportController@index')->name('airport');

Route::post('/airport', 'AirportController@store');

Route::post('/airport/delete{id}', 'AirportController@delete')->name('airport.delete');

Route::post('/airport/update/{id}', 'AirportController@update')->name('airport.update');
//

Auth::routes(['verify' => true]);



