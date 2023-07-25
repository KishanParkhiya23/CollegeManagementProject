<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\StudentEnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class StudentEndHomeController extends Controller
{


    //---------------------------------------
    // Page Call
    //---------------------------------------

    public function StudentHome()
    {
        return view('StudentEnd.Home');
    }
    public function StudentAbout()
    {
        return view('StudentEnd.About');
    }
    public function StudentAdmissions()
    {
        return view('StudentEnd.Admissions');
    }
    public function StudentCourse()
    {
        return view('StudentEnd.Course');
    }

    //---------------------------------------
    // For set Result Page
    //---------------------------------------
    public function StudentResult()
    {
        // For get student details who is curuntly logged in 
        $id = session()->get('StudentLogIn');
        $data = StudentEnd::find($id);
        // for get student details 
        $Student = DB::table('registrations')->where('StudentId', '=', $data->StudentId)->get()->first();
        // For Get Marks
        $Marks = DB::table('marks_entries')->where('StudentId', '=', $Student->StudentId)->get();
        // For get id , class and year
        $ClassYear = DB::table('marks_entries')->where('StudentId', '=', $Student->StudentId)->get()->first();
        // return
        return view('StudentEnd.Result', compact('Student', 'Marks', 'ClassYear'));
    }

    public function StudentContact()
    {
        return view('StudentEnd.Contact');
    }

    //---------------------------------------
    // For set Profile page
    //---------------------------------------

    public function StudentProfile()
    {
        $id = session()->get('StudentLogIn');
        $data = StudentEnd::find($id);
        return view('StudentEnd.Profile', compact('data'));
    }

    // Profile Update

    public function StudentProfileUpdate(Request $req)
    {
        $id = Session()->get('StudentLogIn');
        $data = StudentEnd::find($id);
        $data->StudentName = $req->UStudentName;
        $data->StudentEmail = $req->UStudentEmail;
        $data->save();
        return redirect('StudentProfile');
    }

    //---------------------------------------
    // Log out Code 
    //---------------------------------------

    public function StudentLogOut()
    {
        session()->pull('StudentLogIn');
        return redirect('/');
    }

    //---------------------------------------
    // Change password
    //---------------------------------------

    public function StudentChagePswdPage()
    {
        return view('StudentEnd.ChangePswd');
    }

    public  function StudentChangePswd(Request $req)
    {
        $req->validate([
            'StCpswd' => 'required',
            'StNpswd' => 'required',
            'StRNpswd' => 'required'
        ]);
        $id = Session()->get('StudentLogIn');
        $data = StudentEnd::find($id);
        if (Hash::Check($req->StCpswd, $data->StudentPswd)) {
            if ($req->StNpswd == $req->StRNpswd) {
                $data->StudentPswd = Hash::make($req->StNpswd);
                $data->save();
                return redirect('StudentProfile');
            } else {
                return back()->with('PswdNMtch', 'New and Confirm Password not match');
            }
        } else {
            return back()->with('OldPswdNMatch', 'old  Password not match, please Try Again..');
        }
    }
    //---------------------------------------
    // Forget password
    //---------------------------------------

    public function StudentForgetPswdPage()
    {
        return view('StudentEnd.ForgetPswd');
    }

    public function StudentForgetSave(Request $req)
    {
        $req->validate([
            'FStudentId' => 'required',
            'FStudentEmail' => 'required',
            'FNPswd' => 'required',
            'FNCPswd' => 'required'
        ]);
        if (session()->has('StudentLogIn')) {
            $id = session()->get('StudentLogIn');
            $data = StudentEnd::find($id);
            if ($data->StudentId == $req->FStudentId) {
                if ($req->FNPswd == $req->FNCPswd) {
                    $data->StudentPswd = Hash::make($req->FNPswd);
                    DB::table('student_ends')
                        ->where('StudentId', '=', $req->FStudentId)
                        ->update(['StudentPswd' => Hash::make($req->FNPswd)]);
                    return redirect('StudentProfile');
                } else {
                    return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                }
            } else {
                return back()->with('IdNotMatched', 'ID is not matched.');
            }
        } else {
            $data = DB::table('student_ends')->where('StudentEmail', '=', $req->FStudentEmail)->get()->first();
            if ($data->StudentId == $req->FStudentId) {
                if ($req->FNPswd == $req->FNCPswd) {
                    $data->StudentPswd = Hash::make($req->FNPswd);
                    DB::table('student_ends')
                        ->where('StudentId', '=', $req->FStudentId)
                        ->update(['StudentPswd' => Hash::make($req->FNPswd)]);
                    return redirect('StudentLogIn');
                } else {
                    return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
                }
            } else {
                return back()->with('IdNotMatched', 'ID is not matched.');
            }
        }

        // $id = session()->get('StudentLogIn');
        // $data = StudentEnd::find($id);
        $data = DB::table('student_ends')->where('StudentEmail', '=', $req->FStudentEmail)->get()->first();
        if ($data->StudentId == $req->FStudentId) {
            if ($req->FNPswd == $req->FNCPswd) {
                $data->StudentPswd = Hash::make($req->FNPswd);
                // $data->save();
                DB::table('student_ends')
                    ->where('StudentId', '=', $req->FStudentId)
                    ->update(['StudentPswd' => Hash::make($req->FNPswd)]);
                if (session()->has('StudentLogIn')) {
                    return redirect('StudentProfile');
                } else {
                    return redirect('StudentLogIn');
                }
            } else {
                return back()->with('BothNotMatched', 'New Password and confirm password is not matched.');
            }
        } else {
            return back()->with('IdNotMatched', 'ID is not matched.');
        }
    }

    //---------------------------------------
    // Registration function
    //---------------------------------------

    public function StudentRegistration()
    {
        return view('StudentEnd.Registration');
    }

    public function StudentRegSave(Request $req)
    {
        $req->validate([
            'StudentId' => 'required|regex:/(^ST[0-9 ]+$)+/|min:6|max:6|unique:student_ends,StudentId',
            'StudentName' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'StudentEmail' => 'required|regex:/(.+)@(.+)\.(.+)/i|unique:student_ends,StudentEmail',
            'StudentPswd' => 'required|min:6|max:12',
        ]);

        $GetStudentId = DB::table('registrations')->where('StudentId', '=', $req->StudentId)->get()->first();
        if ($GetStudentId) {
            $data = new StudentEnd();
            $data->StudentId = $req->StudentId;
            $data->StudentName = $req->StudentName;
            $data->StudentEmail = $req->StudentEmail;
            $data->StudentPswd = Hash::make($req->StudentPswd);
            $data->save();
            return redirect('/');
        } else {
            return back()->with('IdNotMatched', 'Your StudentID is not Matched...');
        }
    }


    public function StudentLogIn()
    {
        return view('StudentEnd.LogIn');
    }
    //---------------------------------------
    // Log In Check Code 
    //---------------------------------------

    public function StudentLogInCheck(Request $req)
    {
        $StudentLogInData = DB::table('student_ends')->where('StudentEmail', '=', $req->LogInStudentEmail)->get()->first();
        if ($StudentLogInData) {
            if (Hash::check($req->LogInStudentPswd, $StudentLogInData->StudentPswd)) {
                $req->Session()->put('StudentLogIn', $StudentLogInData->id);
                return redirect('/');
            } else {
                return back()->with('PswdFaill', 'Password Is not matched');
            }
        } else {
            return back()->with('EmailFaill', 'Email Is not matched');
        }
    }
}
