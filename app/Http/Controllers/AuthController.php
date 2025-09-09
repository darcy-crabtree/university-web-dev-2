<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validate\ValidationException;

class AuthController extends Controller
{
    function index()
    {
        return view('auth.login');
    }


    function login(Request $request)
    {
    $userDetails = [
        "email" => $request->email,
        "password" => $request->password
    ];

    //Checks if login details are correct, if not an error message is displayed.
    if (Auth::attempt($userDetails) == true) {
        $request->session()->regenerate();
        return redirect('/medications');
        
    }

    // https://laravel.com/docs/11.x/authentication#authenticating-users Accessed 13/01/25
    else {
        return back()->withErrors([
        'The provided credentials do not match our records.'
    ]);
    }

    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
