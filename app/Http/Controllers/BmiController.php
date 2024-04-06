<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function create()
    {
        return view('bmi.create');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'age' => 'required|numeric',
            'activity_level' => 'required',
        ]);

        $weight = $request->weight;
        $height = $request->height / 100; // converting to meters
        $bmi = $weight / ($height * $height);

        return view('bmi.result', compact('bmi'));
    }
}