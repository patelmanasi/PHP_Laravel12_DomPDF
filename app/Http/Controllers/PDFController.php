<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    // Download PDF
    public function generatePDF()
    {
        $data = [
            'title'  => 'Laravel 12 DomPDF Example',
            'date'   => date('d/m/Y'),
            'name'   => 'Demo User',
            'course' => 'Laravel PDF Generation'
        ];

        $pdf = Pdf::loadView('pdf.example', $data);

        return $pdf->download('laravel12-dompdf.pdf');
    }

    // Stream PDF in browser
    public function streamPDF()
{
    $data = [
        'title'  => 'Stream PDF Example',
        'date'   => date('d/m/Y'),
        'name'   => 'Demo User',
        'course' => 'Laravel PDF Generation'
    ];

    $pdf = Pdf::loadView('pdf.example', $data);

    return $pdf->stream('preview.pdf');
}

}
