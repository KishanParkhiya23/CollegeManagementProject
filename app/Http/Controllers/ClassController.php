<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassM;

class ClassController extends Controller
{
    // page Call 
    public function ClassPage()
    {
        $data['ClassData']=ClassM::all();
        return view('Class.Class',$data);
    }
    
    // Data Save 
    public function ClassSave(Request $req)
    {
        $Obj = new ClassM;
        $Obj->Class = $req->Class;
        $Obj->save();
        return redirect('Class');
    }

    //Update Data
    public function UpdateClassCall($id){
        $data['UpdateClass']=ClassM::find($id);
        return view('Class.Update',$data);
    }

    //Update Save
    public function UpdateClassSave(Request $req,$id){
        $data=ClassM::find($id);
        $data->Class = $req->UClass;
        $data->save();
        return redirect('Class');
    }

    //Delete Data
    public function DeleteClass($id)
    {
        $data = ClassM::find($id);
        $data->delete();
        return redirect('Class');
    }
}
