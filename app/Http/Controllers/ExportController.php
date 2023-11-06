<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Fund;

class ExportController extends Controller
{
    
    public function exportToPDF()
{
    $data = Fund::all();
    $pdf = PDF::loadView('pdf.fund', compact('data'));
    return $pdf->download('fund.pdf');
}
}
