<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bmi' , 'BMIController@index');
// Route::post('/calculate/store','CalculatorController@result')->name('calculate.store');

