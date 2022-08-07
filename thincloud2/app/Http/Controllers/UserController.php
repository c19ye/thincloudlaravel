<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    //Show register form
    public function create(){
        return view('auth.register');
    }

    //Store function to store informations coming from register blade
    public function store(Request $request){
      
        $formFields=$request->validate([
            "username" => ["required","min:3",Rule::unique("users","username")],
            "password" => "required|confirmed|min:3",
            "email" => ["required","email","min:3",Rule::unique("users","email")],
            "name" => ["required","min:2"],
            "surname" => ["required","min:2"],
            "phone" => ["required"],
            "birthdate" => ["required"],
        ]);
       

        // //Hash Function
        // $formFields['password'] = bcrypt($formFields['password']);

        // //Create User
        $user = User::create($formFields);
         
        //Login
        //auth()->login($user);

        return redirect('/')->with('message', 'Kullanıcı oluşturuldu ve başarıyla giriş yapıldı');
    }
}
