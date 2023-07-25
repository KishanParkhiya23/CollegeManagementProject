<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LogInController extends Controller
{
    public function LogInPage()
    {
        return view('LogIn');
    }

    public function LogInCheck(Request $req)
    {
        $req->validate([
            'LogInEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'LogInPswd' => 'required'
        ]);
        $LogInData = DB::table('user_regs')->where('email', '=', $req->LogInEmail)->get()->first();
        if ($LogInData) {
            if (Hash::check($req->LogInPswd, $LogInData->Password)) {
                $req->Session()->put('LogIn', $LogInData->id);
                return redirect('Home');
            } else {
                return back()->with('PswdFaill', 'Password Is not matched');
            }
        } else {
            return back()->with('EmailFaill', 'Email Is not matched');
        }
    }

    public function LogOut()
    {
        session()->pull('LogIn');
        return redirect('/LogIn');
    }
}
