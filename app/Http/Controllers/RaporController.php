<?php

namespace App\Http\Controllers;

use App\Exports\UrunlerExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RaporController extends Controller
{
    public function index()
    {
        return view('backend.raporlama.index');
    }

    public function export()
    {
        $export = new UrunlerExport();
        return Excel::download($export, 'urunler.xlsx');
    }
}
