<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdhProductController extends Controller
{
    public function bdhIndex()
    {
        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
        return view('test', ["fruits"=>$fruits]);
    }
}