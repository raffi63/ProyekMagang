<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as PDF;



class laporanController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('laporan.index', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    public function downloadpdf(){
        $pendaftaran = Pendaftaran::all();
        $pdf = app()->make(PDF::class);
        $pdf->loadView('laporan.cetak', [
            'pendaftaran' => $pendaftaran,
            'users' => User::all()
            // 'pendaftaran' => Pendaftaran::all()
        ]);
        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('laporan.cetak',[
        //     'laporan' => $laporan
        // ]);
        return $pdf->download('laporanUser.pdf');
    }

    public function cetak($id)
    {
        $pendaftaran = Pendaftaran::find($id);

        if (!$pendaftaran) {
            abort(404);
        }
        $pdf = app()->make(PDF::class);
        $pdf->loadView('laporan.cetak', [
            'pendaftaran' => $pendaftaran,
            'users' => User::all()
        ]);
        return $pdf->stream('cetak_pendaftaran.pdf');
    }
}
