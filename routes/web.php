<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartphone', 'SmartphoneController@index');//To usando

Route::delete('/smartphone/{id}', 'SmartphoneController@destroy');//To usando

Route::post('/smartphone', 'SmartphoneController@store');//To usando


Route::put('/smartphone/{id}', 'SmartphoneController@update');

Route::get('/smartphone/{id}/edit', 'SmartphoneController@edit');
