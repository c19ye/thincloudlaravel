<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function showpage(){
        return view('pages.inbox');

    }
}
