<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    public function index()
    {
        return mt_rand(1,99);
    }
}
