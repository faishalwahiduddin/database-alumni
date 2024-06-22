<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AlumniController::class, 'showForm'])->name('alumni.form');
Route::post('/update-alumni', [AlumniController::class, 'store'])->name('alumni.update');
Route::get('/detail/{phone}', [AlumniController::class, 'detail'])->name('alumni.detail');

Route::get('/detail/{phone}/id-card', [AlumniController::class, 'showIdCard'])->name('alumni.idCard');
