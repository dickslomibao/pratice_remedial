<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VoucherController extends Controller
{

    public function index()
    {
        $user = session('user');
        if ($user) {
            return view('index', [
                'vouchers' => DB::table('vouchers')->where('user_id', $user->id)->orderByDesc('date_updated')->paginate(5)
            ]);
        } else {
            return redirect('/login');
        }
    }
    public function logout(){
        session()->flush();
        return redirect('/login')->with('message','Logout Successfully');
    }
    public function generate()
    {
        $user = session('user');
        if (DB::table('vouchers')->where('user_id', $user->id)->count() >= 10) {
            return redirect('/')->with('error', "Voucher code is maximum of 10");
        }

        DB::table('vouchers')->insert([
            'code' => Str::random(10),
            'user_id' => $user->id,
        ]);
        return redirect('/');

    }
    public function singleView($id)
    {
        $user = session('user');
        $voucher = DB::table('vouchers')->where('user_id', $user->id)->where('id', $id)->first();
        if ($voucher) {
            return view('view', [
                'voucher' => $voucher,
            ]);
        }

        return abort(404);
    }
    public function delete($id)
    {
        $user = session('user');
        $delete = DB::table('vouchers')->where('user_id', $user->id)->where('id', $id)->delete();
       
        if($delete == 1){
            return redirect('/')->with('success','Deleted Successfully');
        }
        return abort(404);
    }
}