<?php

use App\Http\Controllers\ExaminationController;
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
    return view('index');
});

Route::resource('examination', ExaminationController::class);

Route::get('/beranda_admin', function () {
    return view('admin.index');
})->name('dashboard');
