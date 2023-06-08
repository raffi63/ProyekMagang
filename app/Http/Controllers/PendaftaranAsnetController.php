<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranAsnet;
use Illuminate\Http\Request;

class PendaftaranAsnetController extends Controller
{
    // Menampilkan Semua Data Pendaftaran Asnet
    public function index()
    {
        $pendaftaranAsnet = PendaftaranAsnet::all();
        return view('pendaftaran_asnet.index', [
            'pendaftaranAsnet' => $pendaftaranAsnet
        ]);
    }

    public function create()
    {
        return view('pendaftaran_asnet.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaperusahaan' => 'required',
            'pic' => 'required',
            'kontakpic' => 'required',
            'bandwidth' => 'required',
            'survey' => 'required|in:sudah,belum',
            'kabel' => 'required',
            'status' => 'required|in:po,belum',
        ]);

        $pendaftaranAsnet = PendaftaranAsnet::create($request->all());

        return redirect()->route('pendaftaran_asnet.index')
            ->with('success_message', 'Berhasil menambah Pendaftaran Asnet baru');
    }

    public function edit($id)
    {
        $pendaftaranAsnet = PendaftaranAsnet::find($id);
        if (!$pendaftaranAsnet) {
            return redirect()->route('pendaftaran_asnet.index')->with('error_message', 'Pendaftaran Asnet dengan id = ' . $id . ' tidak ditemukan');
        }

        return view('pendaftaran_asnet.edit', [
            'pendaftaranAsnet' => $pendaftaranAsnet
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namaperusahaan' => 'required',
            'pic' => 'required',
            'kontakpic' => 'required',
            'bandwidth' => 'required',
            'survey' => 'required|in:sudah,belum',
            'kabel' => 'required',
            'status' => 'required|in:po,belum',
        ]);

        $pendaftaranAsnet = PendaftaranAsnet::find($id);
        $pendaftaranAsnet->update($request->all());

        return redirect()->route('pendaftaran_asnet.index')->with('success_message', 'Berhasil Mengubah Pendaftaran Asnet');
    }

    public function destroy($id)
    {
        $pendaftaranAsnet = PendaftaranAsnet::find($id);

        if ($pendaftaranAsnet) {
            $pendaftaranAsnet->delete();
        }

        return redirect()->route('pendaftaran_asnet.index')->with('success_message', 'Berhasil Menghapus Pendaftaran Asnet');
    }
}
