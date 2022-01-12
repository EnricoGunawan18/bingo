<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $numbers = range(1,99);
        shuffle($numbers);
        return array_slice($numbers,0,24);
    }
}
