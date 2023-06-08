<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', [
            'pelanggan' => $pelanggan
        ]);
    }

    public function create()
    {
        return view('pelanggan.create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:pelanggan',
            'status' => 'required',
            'id_users' => 'required'
        ]);
        $array = $request->only([
        'kode','status', 'id_users'
        ]);
        Pelanggan::create($array);
        return redirect()->route('pelanggan.index');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        if (!$pelanggan) {
            return redirect()->route('pelanggan.index')->with('error_message', 'Pelanggan dengan id = ' . $id . ' tidak ditemukan');
        }

        return view('pelanggan.edit', [
            'pelanggan' => $pelanggan,
            'users' => User::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:pelanggan,kode,' . $id,
            'status' => 'required',
            'id_users' => 'required'
        ]);

        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil Mengubah Pelanggan');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if ($pelanggan) {
            $pelanggan->delete();
        }

        return redirect()->route('pelanggan.index')->with('success_message', 'Berhasil Menghapus Pelanggan');
    }
}
