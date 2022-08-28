<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\User;

class BillingController extends Controller
{
    public function showpage()
    {
        return view('pages.billing_history');
    }

    public function showpagetwo(){
        return view('pages.billing');
    }

    public function store(Request $request)
    {
        dd($request);
        //username thincloudekle den gelen bilgiyle beraber gelecek ve kaydedilecek. O yüzden şuanda yapılmadı.
        $formFields = $request->validate([
            //'username' => ['required', 'min:3'],
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
            // 'credit_card_type' => ['required'],
            // 'credit_card_number' => ['required'],
            // 'credit_card_cvv' => ['required'],
            // 'credit_card_expiration_date' => ['required'],
            // 'coupon_code',
            // 'updated_date',
            // 'deleted_date',
            // //'feather1_icon',
            // 'feather1_title',
            // 'feather1_content',
            // //'feather2_icon',
            // 'feather2_title',
            // 'feather2_content',
            // //'feather3_icon',
            // 'feather3_title',
            // 'feather3_content',
            // //'feather4_icon',
            // 'feather4_title',
            // 'feather4_content',
        ]);

        $user = User::where('id', auth()->user()->id)->get();

        if($request->email != $user->email || $request->password != $user->password){
            return back()->with('errors', 'Girdiğiniz bilgiler hesabınızla uyuşmuyor!');
        }
        if($request->password != $request->confirm_password){
            return back()->with('errors', 'Girdiğiniz şifreler uyuşmuyor');
        }

        $billing = new Billing;

        $billing->user_id = $user->id;
        $billing->name = $request->name;
        $billing->surname = $request->surname;
        $billing->toll_address = $request->toll_address;
        $billing->toll_number = $request->toll_number;
        $billing->address = $request->address;
        $billing->city = $request->city;
        $billing->district = $request->state;
        $billing->zip_code = $request->zip_code;
        $billing->phone_number = $request->phone_number;
        $billing->email = $request->bill_email;

        $billing->save();
    
    }
}