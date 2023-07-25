<?php

namespace App\Http\Controllers;

use App\Models\UserReg;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Profile Page Call
    public function ProfilePage()
    {
        $id = Session()->get('LogIn');
        $data['Profile'] = UserReg::find($id);;
        return view('Profile.Profile', $data);
    }
    // Manage Profile Page Call
    public function ManageProfilePage($id)
    {
        $data['Edit'] = UserReg::find($id);
        return view('Profile.ManageProfile', $data);
    }

    public function UpdateSaveProfile(Request $req, $id)
    {
        $data = UserReg::find($id);
        $data->Fname = $req->UsrFname;
        $data->Lname = $req->UsrLname;
        $data->DOB = $req->UsrDOB;
        $data->Gender = $req->UsrGender;
        $data->Email = $req->UsrEmail;
        $data->Stream = $req->UsrStream;
        $data->Phone = $req->UsrPhone;
        $data->save();
        return redirect('Profile');
    }

    // Change Password
    public function ChangePasswordCall()
    {
        return view('Profile.ChangePassword');
    }

    public function ChangePassword(Request $req)
    {
        $id = Session()->get('LogIn');
        $data = UserReg::find($id);
        if (Hash::Check($req->CPOld, $data->Password)) {
            if ($req->CPNew == $req->CPRNew) {
                $data->Password = Hash::make($req->CPNew);
                $data->save();
                return redirect('Profile');
            } else {
                return back()->with('PswdNMtch', 'New and Confirm Password not match');
            }
        } else {
            return back()->with('OldPswdNMatch', 'old  Password not match');
        }
    }
}
