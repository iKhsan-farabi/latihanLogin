<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function actionRegister(Request $request){
        $user = User::create([

            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          
        ]);

        Session::flash('message', 'Register Berhasil!', 'Akun anda berhasil didaftarkan');
        return redirect('register');
    }
}
