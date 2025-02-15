<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.sign-in');
    }
    
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        //login user
        $login = Auth::attempt($data);

        // try to login user
        if ($login) {
            return redirect()->to('/docs');
        } else {
            return redirect()->back();
        }
    }
}
