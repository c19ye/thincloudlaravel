<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function showpage(){
        return view("pages.roles");
        
    }
}
