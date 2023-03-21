<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalExaminationByMonth = Examination::whereMonth('examination_date', \Carbon\Carbon::now()->month)->count();
        $totalExaminationByDay = Examination::whereDay('examination_date', \Carbon\Carbon::now()->day)->count();

        return view('admin.index', compact('totalExaminationByMonth', 'totalExaminationByDay'));
    }
}
