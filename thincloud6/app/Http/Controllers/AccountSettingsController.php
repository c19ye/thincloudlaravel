<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountSettingsAccount;
use App\Models\Billing;

class AccountSettingsController extends Controller
{
    public function showpageone()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('pages.account-settings-account', compact('user'));
    }

    public function showpagetwo()
    {
        return view('pages.account-settings-security');
    }

    public function showpagethree()
    {
        return view('pages.account-settings-billing');
    }

    public function update_user(Request $request){
        $formFields = $request->validate([
            "name" => ['min:2'],
            "surname" => ['min:2'],
            "email" => ['min:6', Rule::unique('users', 'email')],

        ],
        [
            "name.min" => "İsim en az 2 karakterden oluşmalıdır!",
            "surname.min" => "Soyisim en az 2 karakterden oluşmalıdır",
            "email.min" => "Geçerli mail giriniz!",
            "email.unique" => "E-posta zaten kullanılıyor"
        ]);

        $user = User::where('id', auth()->user()->id)->first();

        if($request->name != null){
            $user->name = $request->name;
        }
        if($request->surname != null){
            $user->surname = $request->surname;
        }
        if($request->email != null){
            $user->email = $request->email;
        }
        if($request->organization_name != null){
            $user->organization_name = $request->organization_name;
        }
        if($request->phone != null){
            $user->phone = $request->phone;
        }
        if($request->address != null){
            $user->address = $request->address;
        }
        if($request->city != null){
            $user->city = $request->city;
        }
        if($request->zipcode != null){
            $user->zipcode = $request->zipcode;
        }

        $user->save();

        return redirect('/')->with('success', "Başarıyla güncellendi");
    }

    public function update_password(Request $request){
        $formFields = $request->validate([
            "password" => ['required', 'min:8'],
            "new_password" => ['required', 'min:8'],
            "confirm_new_password" => ['required', 'min:8'],
        ],
        [
            "password.required" => "Lütfen eski şifrenizi girin!",
            "password.min" => "Lütfen eski şifrenizi doğru girin!",
            "new_password.required" => "Lütfen yeni şifrenizi girin!",
            "new_password.min" => "Yeni şifreniz en az 8 karakterden oluşmalıdır",
            "confirm_new_password.required" => "Bu alanı doldurmanız zorunlu!!!",
            "confirm_new_password.min" => "Yeni şifreniz en az 8 karakterden oluşmalıdır"
        ]);

        $user = User::where('id', auth()->user()->id)->first();

        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with('error', "Girdiğiniz şifreniz hesabınızın parolasıyla uyuşmuyor!!!");
        }

        if($request->new_password != $request->confirm_new_password){
            return redirect('/account-settings-security')->with('error', "Şifreler uyuşmuyor!!!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $user->save();

        return redirect('/')->with('success', "Şifrenizi başarıyla değiştirdiniz.");

    }

    public function add_creditCard(Request $request){
        $formFields = $request->validate([
            "card_number" => ['required', 'min:16', Rule::unique('credit_card', 'card_number')],
            "card_name" => ['required'],
            "card_date" => ['required'],
            "cvv" => ['required', 'max:3']
        ],
        [
            "card_number.required" => "Kart numaranızı giriniz",
            "card_number.min" => "Kart numaranızı düzgün girdiğinizden emin olun",
            'card_number.unique' => "Bu kart daha önce kaydedilmiş",
            "card_name.required" => "Lütfen kart üzerindeki ismi giriniz",
            "card_date.required" => "Lütfen son kullanma tarihini giriniz",
            "cvv.required" => "Lütfen cvv numarasını giriniz",
            "cvv.max" => "Cvv max 3 karakterden oluşabilir"
        ]);

        $card = new CreditCard;
        $card->user_id = auth()->user()->id;
        $card->card_number = $request->card_number;
        $card->owner_name = $request->card_name;
        $request->card_date = Carbon::createFromFormat('Y-m', $request->card_date)->toDateTimeString();
        $card->expire_day = $request->card_date;
        $card->cvv = $request->cvv;
        $card->save();

        auth()->user()->creditcard_id = $card->id;

    }

    public function update_billing(Request $request){
        $billing = Billing::where('user_id', auth()->user()->id)->first();

        if($request->name != null){
            $billing->name = $request->name;
        }
        if($request->surname != null){
            $billing->surname = $request->surname;
        }
        if($request->email != null){
            $billing->email = $request->email;
        }
        if($request->phone_number != null){
            $billing->phone_number = $request->phone_number;
        }
        if($request->country != null){
            $billing->country = $request->country;
        }
        if($request->state != null){
            $billing->district = $request->state;
        }
        if($request->address != null){
            $billing->adress = $request->adress;
        }
        if($request->zip_code != null){
            $billing->zip_code = $request->zip_code;
        }

        $billing->save();

        return redirect('/account-settings-billing')->with('success', 'Başarıyla güncellendi');

    }

    public function delete($user_id){
        User::where('id',$user_id)->delete();
        return redirect('/');
    }
}