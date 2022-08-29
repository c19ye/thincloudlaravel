<?php

namespace App\Http\Controllers;

class FilemanagerController extends Controller
{
    public function showpage()
    {
        return view('pages.filemanager');
    }
}
