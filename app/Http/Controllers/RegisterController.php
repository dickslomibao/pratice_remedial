<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required|max:255',
                'username' => 'required|unique:users,username|max:255',
                'email' => 'required|unique:users,email|max:255',
                'password' => 'required|max:255',
            ]
        );
        $id = DB::table('users')->insertGetId([
            'firstname' => $request->input('firstname'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => md5($request->input('password')),
        ]);

        return redirect('/login')->with('message', 'Welcome ' . $request->input('firstname') . ', Voucher Code: ' . Str::random(10));
    }
}