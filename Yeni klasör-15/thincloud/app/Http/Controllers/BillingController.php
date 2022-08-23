<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function showpage()
    {
        return view('pages.billing');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:3',
            'name' => ['required', 'min:3'],
            'surname' => ['required', 'min:2'],
            'toll_address',
            'toll_number',
            'address' => ['required'],
            'country' => ['required'],
            'district',
            'zip_code' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required'],
            'credit_card_type' => ['required'],
            'credit_card_number' => ['required'],
            'credit_card_cvv' => ['required'],
            'credit_card_expiration_date' => ['required'],
            'coupon_code',
            'created_date',
            'updated_date',
            'deleted_date',
            //'feather1_icon',
            'feather1_title',
            'feather1_content',
            //'feather2_icon',
            'feather2_title',
            'feather2_content',
            //'feather3_icon',
            'feather3_title',
            'feather3_content',
            //'feather4_icon',
            'feather4_title',
            'feather4_content',
        ]);
    }
}
