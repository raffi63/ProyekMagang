<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('daftar.index', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'no_ktp' => 'required',
        'foto_ktp' => $request->file('foto_ktp') != null ?'image|file|max:2048' : '', 
        'no_wa' => 'required',
        'alamat' => 'required',
        'detail_alamat' => 'required',
        'paket' => 'required'
        ]);
        $user = User::find($id);
        $user->no_ktp = $request->no_ktp;
        $user->foto_ktp = $request->file('foto_ktp')->store('FotoKTP');
        $user->no_wa = $request->no_wa;
        $user->alamat = $request->alamat . ', ' . $request->detail_alamat;
        $user->paket = $request->paket;
        $user->save();
        return redirect()->route('daftar.index')->with('success_message', 'Berhasil Mendaftar!!!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) return redirect()->route('daftar.index')->with('error_message', 'Pendaftaran dengan id'.$id.' tidak ditemukan');
        return view('daftar.create', [
        'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'no_ktp' => 'required',
        'foto_ktp' => 'required|image|file|max:2048',
        'no_wa' => 'required',
        'alamat' => 'required',
        'detail_alamat' => 'required',
        'paket' => 'required'
        ]);
        $array = $request->only([
        'no_ktp', 'foto_ktp', 'no_wa', 'alamat', 'detail_alamat', 'paket'
        ]);
        $array['foto_ktp'] = $request->file('foto_ktp')->store('FotoKTP');
        $tambah=User::create($array);
        if($tambah) $request->file('foto_ktp')->store('FotoKTP');
        return redirect()->route('daftar.index') 
        ->with('success_message', 'Berhasil Daftar!!!');
        }
    }