<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }

    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect(route('admin.index'));
            return Auth::user();
        }else{
            return redirect(route('login.show'));
        }

    }
}
