<?php

Route::get('/', 'ElectrodomesticosController@listar');

Route::post('guardarContacto', ['as' => 'guardarContacto', 'uses' => 'ElectrodomesticosController@guardar']);

Route::get('contactos', 'ElectrodomesticosController@listarContactos');