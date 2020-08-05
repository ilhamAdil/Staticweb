<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function sanbercode(Request $request){
        $namadepan = $request["first"];
        $namabelakang = $request["last"];
        return view('selamat',["pertama"=>$namadepan, "kedua"=>$namabelakang]);
    }
}
