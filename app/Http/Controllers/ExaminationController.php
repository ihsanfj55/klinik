<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExaminationRequest;
use App\Http\Requests\UpdateExaminationRequest;
use App\Models\Examination;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $examination = Examination::latest()->get();
            return datatables()->of($examination)
                ->addIndexColumn()
                ->addColumn('examination_date', function ($row) {
                    return $row->examination_date ? $row->examination_date : '';
                })
                ->addColumn('action', 'admin.examinations.include.action')
                ->toJson();
        }

        return view('admin.examinations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.examinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExaminationRequest $request)
    {
        $attr = $request->validated();

        Examination::create($attr);
        return redirect()->route('examination.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Examination $examination)
    {
        return view('admin.examinations.show', compact('examination'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Examination $examination)
    {
        return view('admin.examinations.edit', compact('examination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExaminationRequest $request, Examination $examination)
    {
        $attr = $request->validated();

        $examination->update($attr);
        return redirect()->route('examination.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Examination $examination)
    {
        if ($examination) {
            $examination->delete();

            return redirect()->route('examination.index');
        }
    }
}
