<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index(Request $request){
        $weight = $request->weight;
        $height = $request->height;

        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
                $category = 'Underweight';
            }else if ($bmi < 24.9) {
                $category = 'Normal weight';
            } else if ($bmi < 29.9) {
                $category = 'Overweight';
            } else {
                $category = 'Obese';
            }

        return view('bmi', ['bmi' => $bmi]);
    }
}