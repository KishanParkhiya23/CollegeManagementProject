<?php

namespace App\Http\Controllers;

use App\Models\UserReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ForgetPswdController extends Controller
{
    // Page Call

    public function ForgetPswd()
    {
        return view('ForgetPswd.Forget');
    }

    // Email , Mobile Number And DOB check
    public function NewPswd(Request $req)
    {
        $req->validate([
            'FrEmail'   => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'FrMo'     => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'FrDOB'     => 'required'
        ]);
        $data = DB::table('user_regs')->where('Email', '=', $req->FrEmail)->get()->first();
        if ($data) {
            if ($data->Phone == $req->FrMo) {
                if ($data->DOB == $req->FrDOB) {
                    $req->session()->put('ForgetPswd', $data->id);
                    return  view('ForgetPswd.NewPswd');
                } else {
                    return back()->with('DOBNotMatched', 'Date of Birth is not matched.');
                }
            } else {
                return back()->with('PhNotMatched', 'Mobile Number id is not matched.');
            }
        } else {
            return back()->with('EmailNotMatched', 'Email id is not matched.');
        }
    }

    public function SavePswd(Request $req)
    {
        $id = session()->get('ForgetPswd');
        $data = UserReg::find($id);
        if ($data) {
            if ($req->Nps == $req->NCps) {
                $data->Password = Hash::make($req->Nps);
                session()->pull('ForgetPswd');
                return redirect('/');
            } else {
                // return "in First Elsw";
                // return back()->with('PswdNotmatched', 'Password and confirm password are not matched.');
                // return redirect(route('ForgetNewPswd'))->with('PswdNotmatched', 'Password and confirm password are not matched.');
                return 'Password Not Matched..!!';
            }
        } else {
            return redirect('/')->with('NotFound', 'Retry !! , So You can not abel to change password.');
            // return "in second  else";
        }
    }
}
