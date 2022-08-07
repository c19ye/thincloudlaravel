<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VirtualMachineController extends Controller
{
    public function showpage(){
        return view('pages.virtualmachines');

    }
}
