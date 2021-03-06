<?php

Route::get('/', function () {
    return redirect('smartphone');
});

Route::get('/smartphone', 'SmartphoneController@index');

Route::post('/smartphone', 'SmartphoneController@store');

Route::delete('/smartphone/{id}', 'SmartphoneController@destroy');

Route::put('/smartphone/{id}', 'SmartphoneController@update');

Route::get('/smartphone/{id}/edit', 'SmartphoneController@edit');
