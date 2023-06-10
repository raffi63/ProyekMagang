<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhan = Keluhan::all();
        
        return view('keluhan.index', [
            'keluhan' => $keluhan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('keluhan.create', [
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namapelanggan' => 'required',
            'penyedia' => 'required',
            'keterangan' => 'required',
            'waktu_visit' => 'required',
            'action_keterangan' => 'required',
            'waktu_selesai' => 'required',
            'teknisi' => 'required',
            'status' => 'required',
            'id_users' => 'required'
        ]);
        
        $keluhan = Keluhan::create($request->all());
        
        return redirect()->route('keluhan.index')->with('success_message', 'Berhasil menambah Keluhan baru');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keluhan = Keluhan::find($id);
        
        if (!$keluhan) {
            return redirect()->route('keluhan.index')->with('error_message', 'Keluhan dengan ID '.$id.' tidak ditemukan');
        }
        
        return view('keluhan.edit', [
            'keluhan' => $keluhan,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namapelanggan' => 'required',
            'penyedia' => 'required',
            'keterangan' => 'required',
            'waktu_visit' => 'required',
            'action_keterangan' => 'required',
            'waktu_selesai' => 'required',
            'teknisi' => 'required',
            'status' => 'required',
            'id_users' => 'required'
        ]);
        
        $keluhan = Keluhan::find($id);
        
        if (!$keluhan) {
            return redirect()->route('keluhan.index')->with('error_message', 'Keluhan dengan ID '.$id.' tidak ditemukan');
        }
        
        $keluhan->update($request->all());
        
        return redirect()->route('keluhan.index')->with('success_message', 'Berhasil mengubah Keluhan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluhan = Keluhan::find($id);
        
        if ($keluhan) {
            $keluhan->delete();
        }
        
        return redirect()->route('keluhan.index')->with('success_message', 'Berhasil menghapus Keluhan');
    }
}
