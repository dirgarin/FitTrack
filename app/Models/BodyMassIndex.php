<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyMassIndex extends Model
{
    use HasFactory;
    protected $fillable = [
        'Weight', 
        'Height', 
        'Age',
        'Activity'
    ];
}
