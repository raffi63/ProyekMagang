<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('bayar.index', [
            'pembayaran' => $pembayaran
        ]);
    }

    public function create()
    {
        return view('bayar.create', [
            'pelanggan' => Pelanggan::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode' => 'required',
            'foto' => 'required|image|file|max:2048',
            'kode_pelanggan' => 'required'
        ]);
        $array = $request->only([
        'metode','foto', 'kode_pelanggan'
        ]);
        $array['foto'] = $request->file('foto')->store('FotoBayar');
        $tambah=Pembayaran::create($array);
        if($tambah) $request->file('foto')->store('FotoBayar');
        return redirect()->route('bayar.index') 
        ->with('success_message', 'Berhasil menambah Pembayaran baru');
        }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        if (!$pembayaran) {
            return redirect()->route('bayar.index')->with('error_message', 'Pembayaran dengan id = ' . $id . ' tidak ditemukan');
        }

        return view('pembayaran.edit', [
            'pembayaran' => $pembayaran,
            'pelanggan' => Pelanggan::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'metode' => 'required',
            'foto' => $request->file('foto') != null ?'image|file|max:2048' : '',  
            'kode_pelanggan' => 'required|unique:pembayaran,kode_pelanggan,' . $id
        ]);

        $pembayaran = Pembayaran::find($id);
        $pembayaran->metode = $request->metode;
        $pembayaran->foto = $request->file('foto')->store('FotoBayar');
        $pembayaran->kode_pelanggan = $request->kode_pelanggan;
        $pembayaran->save();

        return redirect()->route('bayar.index')->with('success_message', 'Berhasil Mengubah Pembayaran');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);

        if ($pembayaran) {
            $pembayaran->delete();
        }

        return redirect()->route('bayar.index')->with('success_message', 'Berhasil Menghapus Pembayaran');
    }
}
