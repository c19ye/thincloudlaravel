<?php

namespace App\Http\Controllers;

use App\Models\VirtualMachines;
use App\Models\User;

class IndexController extends Controller
{
    public function showpage()
    {
        if (auth()->check()) {
            $virtualmachines=VirtualMachines::where('user_id',auth()->user()->id)->get();
            $virt=VirtualMachines::where('user_id',auth()->user()->id)->first();
            if($virt == null){
                $var = 1;
            }
            else{
                $var = 0;
            }
            return view('pages.index', compact('var',"virtualmachines"));
        } else {
            return view('auth.login');
        }
    }
}