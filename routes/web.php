<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::resource('examination', ExaminationController::class);

    Route::get('/report', [ReportController::class, 'allExamination'])->name('allExamination');
    Route::get('/report/{examination}', [ReportController::class, 'byExaminationId'])->name('byExaminationId');

    Route::get('/beranda_admin', [DashboardController::class, 'index'])->name('dashboard');
});
