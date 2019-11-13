<?php

/*
Route::get('/', function () {
    return view('test');
});
*/

Route::get('/', 'Primero@index');

Route::get('/index', 'Primero@index');

Route::get('/uno', 'Primero@uno');

Route::get('/dos', 'Primero@dos');

Route::get('/guardar1', 'Primero@guardar1');

Route::get('/tres', 'Primero@tres');

Route::get('/cuatro', 'Primero@cuatro');

Route::get('/cinco', 'Primero@cinco');