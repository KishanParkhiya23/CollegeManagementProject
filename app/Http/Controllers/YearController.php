<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;

class YearController extends Controller
{
    // Page Call
    public function YearPage()
    {
        $data['YearData'] = Year::all();
        return view('Year.Year', $data);
    }

    //Data Save
    public function YearSave(Request $req)
    {
        $Obj = new Year;
        $Obj->Year = $req->Year;
        $Obj->save();
        return redirect('Year');
    }

    //Update Data
    public function UpdateYearCall($id)
    {
        $data['UpdateYear'] = Year::find($id);
        return view('Year.Update', $data);
    }

    //Update Save
    public function UpdateYearSave(Request $req, $id)
    {
        $data = Year::find($id);
        $data->Year = $req->UYear;
        $data->save();
        return redirect('Year');
    }

    //Delete Data
    public function DeleteYear($id)
    {
        $data = Year::find($id);
        $data->delete();
        return redirect('Year');
    }
}
