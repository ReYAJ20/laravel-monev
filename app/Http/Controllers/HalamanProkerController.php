<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\programkerja;
use Illuminate\Http\Request;

class HalamanProkerController extends Controller
{
    public function index()
    {
        $dataTugas = \App\Models\tugasProker::all();
        $dataProker = programkerja::all();

        return view('halamanProker', compact('dataTugas', 'dataProker'));
    }

    public function cetak()
    {
        // Ambil data dari database
        $dataTugas = \App\Models\tugasProker::all();
        $dataProker = programkerja::all();

        // Render view menjadi HTML
        $html = view('views.cetak_laporan', compact('dataProker','dataTugas'))->render();

        // Instance Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // Setup ukuran dan orientasi kertas
        $dompdf->setPaper('A4', 'potrait');

        // Render HTML menjadi PDF
        $dompdf->render();

        // Output PDF ke browser
        $dompdf->stream('daftar_program_kerja.pdf', ['Attachment' => false]);
    }
}
