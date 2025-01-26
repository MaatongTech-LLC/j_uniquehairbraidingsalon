<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {

    }

    public function logout()
    {

    }

    public function forgotPassword(Request $request)
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordPost(Request $request)
    {

    }

    public function resetPassword(Request $request, $token)
    {

    }
}
