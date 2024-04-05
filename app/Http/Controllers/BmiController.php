<?php

namespace App\Http\Controllers;

use App\Models\bmi;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function calculate(Request $request){

        //model::input($request->excpet(['_token','submit']));
        $weight = $request->weight;
        $height = $request->height;
        $age = $request->age;

        $height_m = $height/100;
        $bmi = $weight / ($height_m * $height_m);

        if ($bmi < 18.5) {
            $category = 'Underweight';
        }else if ($bmi < 24.9) {
            $category = 'Normal weight';
        } else if ($bmi < 29.9) {
            $category = 'Overweight';
        } else {
            $category = 'Obese';
        }

        return redirect('/bmi');
    }
    
}