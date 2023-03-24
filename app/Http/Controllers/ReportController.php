<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function allExamination(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $examinations = Examination::whereBetween('examination_date', [$startDate, $endDate])->orderBy('examination_date', 'DESC')->get();

        $pdf = Pdf::loadView('admin.examinations.report.all', compact('examinations', 'startDate', 'endDate'))->setPaper('A4', 'portrait');
        return $pdf->stream('laporan-pemeriksaan' . $startDate . '-' . $endDate . '.pdf');
    }

    public function byExaminationId(Examination $examination)
    {
        $pdf = Pdf::loadView('admin.examinations.report.byExaminationId', compact('examination'))->setPaper('A4', 'portrait');
        return $pdf->stream('laporan-pemeriksaan' . $examination->fullname  . '.pdf');
    }
}
