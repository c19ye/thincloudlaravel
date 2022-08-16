<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilemanagerController extends Controller
{
    public function showpage(){
        return view("pages.filemanager");
    }
}
