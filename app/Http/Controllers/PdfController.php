<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function showPdf(Request $request)
    {
        $filename = $request->input('filename');
        $pdfPath = 'upload/' . $filename;
        // Check if the file exists
        if (file_exists($pdfPath)) {
            return view('pdf.show', ['pdfPath' => asset($pdfPath)]);
        } else {
            abort(404);
        }
    }
}
