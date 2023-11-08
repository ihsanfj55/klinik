<?php

namespace App\Http\Controllers;

use App\Models\Examination;

class DashboardController extends Controller
{
    public function index()
    {
        $totalExaminationByMonth = Examination::whereMonth('examination_date', \Carbon\Carbon::now()->month)->count();
        $totalExaminationByDay = Examination::whereDate('examination_date', \Carbon\Carbon::now()->format('Y-m-d'))->count();
        $totalAllExamination = Examination::count();

        return view('admin.index', compact('totalExaminationByMonth', 'totalExaminationByDay', 'totalAllExamination'));
    }

    public function visitDay()
    {
        if (request()->ajax()) {
            $examination = Examination::whereDate('examination_date', \Carbon\Carbon::now()->format('Y-m-d'))->get();
            return datatables()->of($examination)
                ->addIndexColumn()
                ->toJson();
        }
        return view('admin.visitDay');
    }
    public function visitMonth()
    {

        if (request()->ajax()) {
            $examination = Examination::whereMonth('examination_date', \Carbon\Carbon::now()->month)->get();
            return datatables()->of($examination)
                ->addIndexColumn()
                ->toJson();
        }
        return view('admin.visitMonth');
    }
    public function allVisit()
    {
        if (request()->ajax()) {
            $examination = Examination::all();
            return datatables()->of($examination)
                ->addIndexColumn()
                ->toJson();
        }
        return view('admin.allVisit');
    }
}
