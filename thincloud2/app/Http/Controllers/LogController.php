<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function showpage(){
        return view("pages.log");
    }
}
