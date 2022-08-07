<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyplansController extends Controller
{
    public function showpage(){
        return view("pages.myplans");
    }
}
