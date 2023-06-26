<?php

namespace App\Http\Controllers;
use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KeluhanTeknisiController extends Controller
{
    public function index()
    {
        $keluhan = Keluhan::where('status', '!=', 'selesai')->orWhereNull('status')->get();

        return view('keluhanteknisi.index', [
            'keluhan' => $keluhan,
            'users' => User::get(),
        ]);
    }

    public function edit($id)
    {
        $keluhan = Keluhan::find($id);
        
        if (!$keluhan) {
            return redirect()->route('keluhanteknisi.index')->with('error_message', 'Keluhan dengan ID '.$id.' tidak ditemukan');
        }
        
        return view('keluhanteknisi.edit', [
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
            'waktu_visit' => 'required',
            'teknisi' => 'required',
            'action_keterangan' => 'required',
            'status' => 'required'

        ]);
        
        $keluhan = Keluhan::find($id);
        
        if (!$keluhan) {
            return redirect()->route('keluhanteknisi.index')->with('error_message', 'Keluhan Pelanggan dengan ID '.$id.' tidak ditemukan');
        }
        
        $keluhan->update($request->all());
        
        return redirect()->route('keluhanteknisi.index')->with('success_message', 'Berhasil memverifikasi');
    }

    public function destroy(Request $request,$id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->status = 'selesai';
        $keluhan->waktu_selesai = Carbon::now('Asia/Jakarta');
        $keluhan->update($request->all());
        return redirect()->route('keluhanteknisi.index')->with('success_message', 'Keluhan Telah Teratasi');
    }
}