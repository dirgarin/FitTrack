<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/bmi/calculate', [BmiController::class, 'calculate'])->name('bmi.calculate');

