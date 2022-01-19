<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $numbers = range(1,99);
        shuffle($numbers);
        $bingo_range = array_splice($numbers,0,24);
        array_splice($bingo_range,12,0,'');
        return $bingo_range;
    }
}
