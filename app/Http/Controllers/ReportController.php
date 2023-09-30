<?php

namespace App\Http\Controllers;

use App\Exports\ExaminationExport;
use App\Models\Examination;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function allExamination(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;

        return (new ExaminationExport($startDate, $endDate))->download('laporan-pemeriksaan' . $startDate . '-' . $endDate . '.xlsx');
    }

    public function byExaminationId(Examination $examination)
    {
        $pdf = Pdf::loadView('admin.examinations.report.byExaminationId', compact('examination'))->setPaper('A4', 'portrait');
        return $pdf->stream('laporan-pemeriksaan' . $examination->fullname  . '.pdf');
    }
}
