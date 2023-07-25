<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //Page Call
    public function SubjectPage()
    {
        $data['SubjectData'] = Subject::all();
        return view('Subject.Subject', $data);
    }

    // Data Save 

    public function SubjectSave(Request $req)
    {
        $Obj = new Subject;
        $Obj->Subject = $req->Subject;
        $Obj->save();
        return redirect('Subject');
    }

    //Update Data
    public function UpdateSubjectCall($id)
    {
        $data['UpdateSubject'] = Subject::find($id);
        return view('Subject.Update', $data);
    }

    //Update Save
    public function UpdateSubjectSave(Request $req, $id)
    {
        $data = Subject::find($id);
        $data->Subject = $req->USubject;
        $data->save();
        return redirect('Subject');
    }


    //Delete Data
    public function DeleteSubject($id)
    {
        $data = Subject::find($id);
        $data->delete();
        return redirect('Subject');
    }
}
