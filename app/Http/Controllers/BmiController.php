<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function calculate(Request $request)
    {
        $request->validate([
            'height' => 'required|numeric|min:0.1|max:3',
            'weight' => 'required|numeric|min:10|max:500',
        ]);

        $user = User::create([
            'height' => $request->height,
            'weight' => $request->weight,
        ]);

        $bmi = $user->calculateBmi();

        return view('bmi.result', compact('bmi'));
    }
}