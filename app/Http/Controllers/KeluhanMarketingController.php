<?php

namespace App\Http\Controllers;
use App\Models\Keluhan;
use Illuminate\Http\Request;
use App\Models\User;
class KeluhanMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhanmarketing.index', [
            'keluhan' => $keluhan,
            'users' => User::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluhanmarketing.create', [
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
            'id_users' => 'required'
        ]);
        
        $array = $request->only([
            'namapelanggan', 'keterangan', 'id_users'
        ]);
        
        $tambah = Keluhan::create($array);
        return redirect()->route('keluhanmarketing.index')->with('success_message', 'Berhasil menambah Keluhan baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            return redirect()->route('keluhanmarketing.index')->with('error_message', 'Keluhan dengan ID '.$id.' tidak ditemukan');
        }
        
        return view('keluhanmarketing.edit', [
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
            'keterangan' => 'required',
        ]);
        
        $keluhan = Keluhan::find($id);
        
        if (!$keluhan) {
            return redirect()->route('keluhanmarketing.index')->with('error_message', 'Keluhan Pelanggan dengan ID '.$id.' tidak ditemukan');
        }
        
        $keluhan->update($request->all());
        
        return redirect()->route('keluhanmarketing.index')->with('success_message', 'Berhasil mengubah Keluhan');
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
        
        return redirect()->route('keluhanmarketing.index')->with('success_message', 'Berhasil menghapus Keluhan');
    }
}
