<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );
        $user = DB::table('users')->where('username', $request->input('username'))->where('password', md5($request->input('password')))->first();
        if ($user) {
            session(['user' => $user]);
            return redirect('/');
        } else {
            return redirect('/login')->with('invalid-account', "Invalid username or password");
        }
    }
}