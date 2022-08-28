<?php

namespace App\Http\Controllers;

use App\Models\VirtualMachines;
use App\Models\User;

class IndexController extends Controller
{
    public function showpage()
    {

        if (auth()->check()) {
            if(VirtualMachines::where('user_id',auth()->user()->id) == null){
                $var = 1;
            }
            else{
                $var = 0;
            }
            return view('pages.index', compact('var'));
        } else {
            return view('auth.login');
        }
    }
}
