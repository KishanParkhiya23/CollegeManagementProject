<?php

namespace App\Http\Controllers;

use App\Models\ClassM;
use App\Models\Registration;
use App\Models\Year;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class RegestrationController extends Controller
{


    //Page Call

    public function RegestrationPage()
    {
        $Year['DataYear'] = Year::all();
        $Class['DataClass'] = ClassM::all();
        return view('Reg.Registration', $Year, $Class);
    }

    public function StudentPage()
    {
        $data['All'] = Registration::all();
        return view('Reg.Student', $data);
    }

    // Data Save 
    public function RegSave(Request $req)
    {
        $req->validate([
            'RegFname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'RegMname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'RegLname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'RegStreetAdd1' => 'required',
            'RegMobile' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'RegGender' => 'required',
            'RegDOB' => 'required',
            'RegReligion' => 'required',
            'RegYear' => 'required',
            'RegClass' => 'required'
        ]);
        $table = new Registration();

        // studeng Id Generation
        $StId = 'ST' . rand(1000, 9999); 

        $IDtable = DB::table('registrations')->select('StudentId')->where('StudentId', '=', $StId)->get()->first();

        if ($IDtable) {
            do {
                $StId = 'ST' . rand(1000, 9999);
                $IDtable = DB::table('registrations')->select('StudentId')->where('StudentId', '=', $StId)->get()->first();

            } while ($IDtable == $StId);
            
            $table->StudentId = $StId;
        } else {
            $table->StudentId = $StId;
        }


        $table->Fname = $req->RegFname;
        $table->Mname = $req->RegMname;
        $table->Lname = $req->RegLname;
        $table->Address = $req->RegStreetAdd1;
        $table->Mobile = $req->RegMobile;
        $table->Gender = $req->RegGender;
        $table->DOB = $req->RegDOB;
        $table->Religion = $req->RegReligion;
        $table->Year = $req->RegYear;
        $table->Class = $req->RegClass;

        // insert Image
        $file = $req->file('RegPhoto');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('img'), $filename);
        $table['Img'] = $filename;


        $table->save();
        return redirect('StudentPage');
    }

    public function StudentUpdate(Request $req, $id)
    {
        $Year = Year::all();
        $Class = ClassM::all();
        $std = Registration::find($id);
        return view('Reg.Update', compact('Year', 'std', 'Class'));
    }

    public function UpdateStudentSave(Request $req, $id)
    {
        $req->validate([
            'UpFname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'UpMname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'UpLname' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'UpStreetAdd1' => 'required',
            'UpMobile' => 'required | regex:/^[0-9]{10}/|min:10|max:10',
            'UpDOB' => 'required'
        ]);
        $table = Registration::find($id);
        $table->Fname = $req->UpFname;
        $table->Mname = $req->UpMname;
        $table->Lname = $req->UpLname;
        $table->Address = $req->UpStreetAdd1;
        $table->Mobile = $req->UpMobile;
        $table->Gender = $req->UpGender;
        $table->DOB = $req->UpDOB;
        $table->Religion = $req->UpReligion;
        $table->Year = $req->UpYear;
        $table->Class = $req->UpClass;
        $table->save();
        return redirect('StudentPage');
    }

    public function DeleteStudent($id)
    {
        $Del = Registration::Find($id);
        $Del->delete();
        return redirect('StudentPage');
    }
}
