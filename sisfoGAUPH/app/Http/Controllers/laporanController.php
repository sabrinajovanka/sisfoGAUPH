<?php

namespace App\Http\Controllers;

use App\Models\pengajuanReplacementClass;
use Illuminate\Http\Request;
use PDF;

class laporanController extends Controller
{
    public function show($id){

        $replace = pengajuanReplacementClass::findOrFail($id);

        return view ('admin.laporan.indexReplacement', compact('replace'));
    }

    public function pdf($id){

        $replace = pengajuanReplacementClass::findOrFail($id);
        
        $pdf = PDF::loadview('admin.laporan.printReplacement', compact('replace'));

        return $pdf->download('pengajuan-replacement');
    }
}

?>