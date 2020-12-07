<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function sign_up(){
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('sign_up');
    }
    
    public function sign_in(){
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('sign_in');
    }
}