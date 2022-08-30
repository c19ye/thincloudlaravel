<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Billing;
use Illuminate\Http\Request;
use App\Models\VirtualMachines;

class BillingController extends Controller
{
    public function showpage()
    {
        return view('pages.billing_history');
    }

    public function showpagetwo($id=""){
        return view('pages.billing',compact("id"));
    }

    public function store(Request $request)
    {
        $vminformations=session('vm');
        $myplan=session('myplan');
     
        //username thincloudekle den gelen bilgiyle beraber gelecek ve kaydedilecek. O yüzden şuanda yapılmadı.
        //    $request->validate([
        //     'username' => ['required', 'min:3'],
        //     'email' => ['required', 'email'],
        //     'password' => 'required|confirmed|min:3',
        //     'name' => ['required', 'min:3'],
        //     'surname' => ['required', 'min:2'],
        //     // 'toll_address',
        //     // 'toll_number',
        //     // 'address' => ['required'],
        //     // 'country' => ['required'],
        //     // 'district',
        //     // 'zip_code' => ['required'],
        //     // 'phone_number' => ['required'],
        //     // 'email' => ['required'],
        //     // 'credit_card_type' => ['required'],
        //     // 'credit_card_number' => ['required'],
        //     // 'credit_card_cvv' => ['required'],
        //     // 'credit_card_expiration_date' => ['required'],
        //     // 'coupon_code',
        //     // 'updated_date',
        //     // 'deleted_date',
        //     // //'feather1_icon',
        //     // 'feather1_title',
        //     // 'feather1_content',
        //     // //'feather2_icon',
        //     // 'feather2_title',
        //     // 'feather2_content',
        //     // //'feather3_icon',
        //     // 'feather3_title',
        //     // 'feather3_content',
        //     // //'feather4_icon',
        //     // 'feather4_title',
        //     // 'feather4_content',
        // ]);

        // $user = User::where('id', auth()->user()->id)->first();

        // if($request->email != $user->email || $request->password != $user->password){
        //     return back()->with('errors', 'Girdiğiniz bilgiler hesabınızla uyuşmuyor!');
        // }
        // if($request->password != $request->confirm_password){
        //     return back()->with('errors', 'Girdiğiniz şifreler uyuşmuyor');
        // }
        $billing = new Billing;
        $billing->user_id = auth()->user()->id;
        $billing->name = $request->name;
        $billing->surname = $request->surname;
        $billing->toll_address = $request->toll_address;
        $billing->toll_number = $request->toll_number;
        $billing->address = $request->address;
        $billing->city = $request->city;
        $billing->district = $request->district;
        $billing->zip_code = $request->zip_code;
        $billing->phone_number = $request->phone_number;
        $billing->email = $request->bill_email;

        $billing->save();

        //if payment done create vm
        if(session()->has('vm')){
            VirtualMachines::create($vminformations);
            session()->forget('vm');
           return redirect('/mynetwork/virtualmachines')->withSuccess("ThinCloud Başarıyla Oluşturuldu.");

        }
            //if payment done change plan
            VirtualMachines::where("thincloudname",$myplan)->update([
            "my_plans_id" => $request->get_planid,
            "started_date" => Carbon::now()->format('Y-m-d'),
            "end_date" => Carbon::now()->addDay(30)->format('Y-m-d'),
        ]);
        session()->forget('myplan');
        return redirect('/mythincloud/myplans')->withSuccess("Plan Başarıyla Değiştirildi.");



    }
}
