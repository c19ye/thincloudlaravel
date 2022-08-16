<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showpage(){

        if(auth()->check()){
            return view('pages.index');
        }
        else{
            return view('auth.login');
            
        }

    }
}
