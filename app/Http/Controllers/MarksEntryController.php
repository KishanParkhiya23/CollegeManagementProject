<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Subject;
use App\Models\ClassM;
use App\Models\MarksEntry;
use App\Models\MarksGrade;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MarksEntryController extends Controller
{
    //Page Call
    public function MarksEntryPage()
    {
        $data = MarksEntry::all();
        $Year = Year::all();
        $Class = ClassM::all();
        $Subject = Subject::all();
        $Grade = MarksGrade::all();
        $student = Registration::all();
        return view('MarksEntry.MarksEntry', compact('data', 'Class', 'Year', 'Subject', 'student', 'Grade'));
    }

    // For Save Data
    public function MarksEntrySave(Request $req)
    {
        $data = new MarksEntry();
        $data->StudentId = $req->StudentId;
        $data->Class = $req->StudentClass;
        $data->Year = $req->StudentYear;
        $data->Subject = $req->StudentSubject;
        $data->Grade = $req->Grade;
        $data->TotalMarks = $req->TotalMarks;
        $data->ObtainMarks = $req->ObtainMarks;
        $data->save();
        return redirect('MarksEntry');
    }

    // Update page call
    public function UpdateMarks($id)
    {
        $UpdateMarks = MarksEntry::find($id);
        $data = MarksEntry::all();
        $Year = Year::all();
        $Class = ClassM::all();
        $Subject = Subject::all();
        $Grade = MarksGrade::all();
        $student = Registration::all();

        return view('MarksEntry.Update', compact('UpdateMarks', 'data', 'Year', 'Class', 'Subject', 'Grade', 'student'));
    }

    //Update Save 
    public function UpdateMarksSave(Request $req, $id)
    {
        $data = MarksEntry::find($id);
        $data->StudentId = $req->StudentId;
        $data->Grade = $req->Grade;
        $data->Class = $req->UpStudentClass;
        $data->Year = $req->UpStudentYear;
        $data->Subject = $req->UpStudentSubject;
        $data->TotalMarks = $req->UTotalMarks;
        $data->ObtainMarks = $req->UObtainMarks;
        $data->save();
        return redirect('MarksEntry');
    }

    public function DeleteMarks($id)
    {
        $Delete = MarksEntry::find($id);
        $Delete->delete();
        return Redirect('MarksEntry');
    }
}
