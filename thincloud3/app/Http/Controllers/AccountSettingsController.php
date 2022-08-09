<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingsController extends Controller
{
    public function showpageone(){
        return view("pages.account-settings-account");

    }

    

    public function showpagetwo(){
        return view("pages.account-settings-security");

    }
    public function showpagethree(){
        return view("pages.account-settings-billing");

    }
}
