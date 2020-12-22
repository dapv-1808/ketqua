<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xoso extends Model
{
    use HasFactory;

    protected $secondPrize = [
        'second' => 'array'
    ];

    protected $thirdPrize = [
        'third' => 'array'
    ];


    protected $fourPrize = [
        'four' => 'array'
    ];

    protected $fivePrize = [
        'five' => 'array'
    ];


    protected $sixPrize = [
        'six' => 'array'
    ];

    protected $sevenPrize = [
         'seven' => 'array'
    ];
}
