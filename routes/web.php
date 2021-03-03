<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/image', function () {
    return view('imagetest');
});
Route::get('/forwarder', 'TribalController@index');

Route::get('/dc','dcController@index');
Route::get('/dc/{id}','dcController@show');

Route::get('/fieldofficer','fieldofficerController@index');
Route::get('/fieldofficer/{id}','fieldofficerController@show');


Route::post('/submit', 'TribalController@store'); 
Route::get('/tribal', 'TribalController@index');
Route::get('/tribal/{id}', 'TribalController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/download/{id}', 'TribalController@download');
Route::get('/ack/{id}', 'TribalController@dload');

// Route::post('/reject/{id}', 'TribalController@rejStore')->name('tribal.rejStore');
 Route::post('/submit/{id}', 'dcController@store');
 Route::get('/reject/{id}', 'dcController@rejStore');
 Route::get('/status/{id}', 'dcController@update');
 Route::get('/approve/{id}', 'dcController@update');


 Route::get('/search', 'SearchController@index');

//  Route::get('/dloadpage/{id}', 'SearchController@index');

 Route::get('/search/action', 'SearchController@action')->name('Search.action');

 

 Route::get('/checkdload', function () {
    return view('checkdload');
});
