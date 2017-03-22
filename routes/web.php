<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartphone', 'SmartphoneController@index');

Route::get('/smartphone/create', 'SmartphoneController@create');

Route::post('smartphone', 'SmartphoneController@store');

Route::put('/smartphone/{id}', 'SmartphoneController@update');

Route::get('/smartphone/{id}/edit', 'SmartphoneController@edit');

Route::delete('/smartphone/{id}', 'SmartphoneController@destroy');

Route::get('/smartphone/{id}', 'SmartphoneController@show');
