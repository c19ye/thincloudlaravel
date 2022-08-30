<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register form
    public function create()
    {
        return view('auth.register');
    }

    //Store function to store informations coming from register blade
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'password' => 'required|confirmed|min:8',
            'email' => ['required', 'email', 'min:3', Rule::unique('users', 'email')],
            'name' => ['required', 'min:2'],
            'surname' => ['required', 'min:2'],
            'phone' => ['required'],
            'birthdate' => ['required'],
            'kvkk' => ['accepted'],

        ],
            [
                'username.required' => 'Kullanıcı Adınızı Girin',
                'username.min' => 'Kullanıcı Adınız Minimum 3 Karakterden Oluşmalıdır',
                'username.unique' => 'Kullanıcı İsmi Mevcut',
                'password.required' => 'Parolanızı Girin',
                'password.confirmed' => 'Parolalarınız Eşleşmedi',
                'password.min' => 'Parolanız Minimum 8 Karakterden Oluşmalıdır',
                'email.required' => 'E-Postanızı Girin',
                'email.unique' => 'Böyle Bir E-Posta Mevcut',
                'email.min' => 'E-Postanız Minimum 3 Karakterden Oluşmalıdır',
                'email.email' => 'Geçersiz E-Posta',
                'name.required' => 'Adınızı Girin',
                'name.min' => 'İsminiz Minimum 2 Karakterden Oluşmalıdır',
                'surname.required' => 'Soyadınızı Girin',
                'surname.min' => 'Soyadınız Minimum 3 Karakterden Oluşmalıdır',
                'phone.required' => 'Telefon Numaranızı Girin',
                'birthdate.required' => 'Doğum Gününüzü Girin',
                'kvkk.accepted' => 'Kayıt Olmak İçin KVKK Şartlarını Kabul Etmelisiniz',
            ]
        );

        // //Hash Function
        $formFields['password'] = bcrypt($formFields['password']);

        // //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'Kullanıcı oluşturuldu ve başarıyla giriş yapıldı');
    }

    //burası sndhısh
    //Logout User
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session->regenerateToken();

        return redirect('/')->with('message', 'Çıkış Yapıldı!');
    }

    //Show Login User Form
    public function login()
    {
        return view('auth.login');
    }

    //User Login
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ],
            [
                'email.required' => 'E-Postanızı Giriniz',
                'email.email' => 'Geçersiz E-Posta',
                'password.required' => 'Parolanızı Giriniz',
            ]
        );

        if (auth()->attempt($formFields)) {
            $request->session()->regenerateToken();

            return redirect('/')->with('message', 'Başarıyla giriş yapıldı.');
        }

        return back()->withErrors(['email' => 'Geçersiz E-posta veya Şifre'])->onlyInput('email');
    }

    public function update(Request $request)
    {
        if (strcmp($request->get('email'), $request->get('new-email')) == 0) {
            return redirect()->back()->with('error', 'Yeni girdiğiniz e-posta adresi eskisiyle aynı olamaz!!!');
        }

        $user = auth()->user();

        $user->email = $request['new-email'];
        auth()->logout();
        $user->save();

        return view('auth.login');
    }
}
