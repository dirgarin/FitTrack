<?php

use App\Http\Controllers\BmiController;
use Illuminate\Support\Facades\Route;


Route::get('/bmi/create', [BMIController::class, 'create'])->name('bmi.create');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');