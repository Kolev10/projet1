<?php

use Illuminate\Support\Facades\Route;




Route::view('/','welcome');
Route::view('a-propos','a-propos')->middleware('test');

//clients
/*
Route::get('clients', 'ClientsController@index'); //appel du Controller Clients
Route::get('clients/create', 'ClientsController@create');
Route::post('clients', 'ClientsController@store');
Route::get('clients/{client}', 'ClientsController@show'); //voir profile client
Route::get('clients/{client}/edit', 'ClientsController@edit'); //editer le profile client
Route::patch('clients/{client}', 'ClientsController@update'); //modifier client
Route::delete('clients/{client}', 'ClientsController@destroy'); 
*/
Route::resource('clients', 'ClientsController');

//Contact
Route::get('contact-nous', 'ContactController@create')->name('contact.create');
Route::post('contact-nous', 'ContactController@store')->name('contact.store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
