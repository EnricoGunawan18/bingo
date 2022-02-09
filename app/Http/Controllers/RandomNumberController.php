<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    public function index(Request $request)
    {
        $str_exclusion = $request->input('number');

        $exclusion = json_decode($str_exclusion); 

        if(count($exclusion) <  100 ){
            $rand_num = mt_rand(1,99);
            
            while(in_array($rand_num,$exclusion)){
                $rand_num = mt_rand(1,99);
            }
            return $rand_num;
        }
        else{
            
        }
    }
}
