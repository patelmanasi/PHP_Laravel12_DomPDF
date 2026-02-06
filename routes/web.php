<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome-pdf');
});

Route::get('/download-pdf', [PDFController::class, 'generatePDF']);
Route::get('/stream-pdf', [PDFController::class, 'streamPDF']);

