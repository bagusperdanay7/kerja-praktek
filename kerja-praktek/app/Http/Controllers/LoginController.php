<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\Captcha;

class LoginController extends Controller
{
    public function TampilLogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        return redirect('/');
    }



}
