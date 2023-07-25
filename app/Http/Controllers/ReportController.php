<?php

namespace App\Http\Controllers;

use App\Models\ClassM;
use App\Models\Registration;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function ReportManagementPage()
    {
        $Student = Registration::all();
        $Year = Year::all();
        $Class = ClassM::all();
        return view('Report.ReportManagement', compact('Student', 'Year', 'Class'));
    }

    public function GenerateResult(Request $req)
    {
        $req->validate([
            'RId' => 'required',
            'RClass' => 'required',
            'RYear' => 'required'
        ]);

        $data =
            DB::table('marks_entries')
            ->where([['StudentId', '=', $req->RId], ['Class', '=', $req->RClass], ['Year', '=', $req->RYear]])
            ->get();

        $Year =
            DB::table('marks_entries')
            ->where([['StudentId', '=', $req->RId], ['Class', '=', $req->RClass], ['Year', '=', $req->RYear]])
            ->get()->first();

        $student = DB::table('registrations')->where('StudentId', '=', $req->RId)->get()->first();
        if (count($data) > 0) {
            return view('Report.Result', compact('data','student','Year'));
        } else {
            return back()->with('NotMatched', 'All Details are not proper, please check all details again.');
        }
    }
};
