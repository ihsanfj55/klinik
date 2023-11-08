<?php

namespace App\Http\Controllers;

use App\Exports\ExaminationExport;
use App\Exports\ExaminationsAllExport;
use App\Exports\ExaminationsMonthExport;
use App\Models\Examination;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{

    public function allExamination(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        return Excel::download(new ExaminationExport($startDate, $endDate), 'laporan-pemeriksaan.xlsx');
    }

    public function byExaminationId(Examination $examination)
    {
        $pdf = Pdf::loadView('admin.examinations.report.byExaminationId', compact('examination'))->setPaper('A4', 'portrait');
        return $pdf->download('laporan-pemeriksaan' . $examination->fullname  . '.pdf');
    }

    public function reportExaminationDay()
    {
        $examinations = Examination::whereDate('examination_date',  \Carbon\Carbon::now()->format('Y-m-d'))->get();
        $pdf = Pdf::loadView('admin.examinations.report.day', compact('examinations'))->setPaper('A4', 'portrait');
        return $pdf->download('laporan-pemeriksaan' . '.pdf');
    }
    public function reportExaminationMonth()
    {
        return Excel::download(new ExaminationsMonthExport, 'reportExaminationMonth.xlsx');
    }

    public function reportAllExamination()
    {
        return Excel::download(new ExaminationsAllExport, 'reportAllExamination.xlsx');
    }
}
