<?php

namespace App\Http\Controllers;

use App\Models\MarksGrade;
use App\Models\Year;
use App\Models\Subject;
use App\Models\ClassM;
use Illuminate\Http\Request;

class MarksGradeController extends Controller
{
    //Page Call
    public function MarksGradePage()
    {
        $data['MarksGradeData'] = MarksGrade::all();
        $Year['DataYear'] = Year::all();
        $Class['DataClass'] = ClassM::all();
        $Subject['DataSubject'] = Subject::all();
        return view('MarksGrade.MarksGrade', $data, $Class, $Year, $Subject);
    }

    // For Save Data
    public function MarksGradeSave(Request $req)
    {

        $Grade = new MarksGrade();
        $Grade->Grade = $req->Grade;
        $Grade->StartMarks = $req->SMarks;
        $Grade->EndMarks = $req->EMarks;
        $Grade->Remarks = $req->Remarks;
        $Grade->save();
        return redirect('MarksGrade');
    }


    // Update page call
    public function UpdateMarksGrade($id)
    {
        $data = MarksGrade::find($id);
        return view('MarksGrade.Update', compact('data'));
    }

    // Update Save marks grade
    public function UpdateSaveMarksGrade(Request $req, $id)
    {
        $data = MarksGrade::find($id);
        $data->Grade = $req->UGrade;
        $data->StartMarks = $req->USMarks;
        $data->EndMarks = $req->UEMarks;
        $data->Remarks = $req->URemarks;
        $data->save();
        return redirect('MarksGrade');
    }

    // delete data 
    public function DeleteMarksGrade($id)
    {
        $data = MarksGrade::find($id);
        $data->delete();
        return redirect('MarksGrade');
    }
}
