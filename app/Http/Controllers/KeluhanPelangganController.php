<?php

namespace App\Http\Controllers;
use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluhanPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $keluhan = keluhan::where('id_users', Auth::user()->id)->get();
        } else {
            $keluhan = keluhan::get();
        }
        return view('keluhanpelanggan.index', [
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
        return view('keluhanpelanggan.create', [
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
            'keterangan' => 'required',
            'id_users' => 'required'
        ]);
        
        // $keluhan = keluhan::find();
        // $keluhan -> penyedia = 'asnet';
        // $keluhan->save();
        $array = $request->only([
            'namapelanggan', 'keterangan', 'id_users'
        ]);
        
        $tambah = Keluhan::create($array);
        return redirect()->route('keluhanpelanggan.index')->with('success_message', 'Berhasil menambah Keluhan baru');
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
            return redirect()->route('keluhanpelanggan.index')->with('error_message', 'Keluhan dengan ID '.$id.' tidak ditemukan');
        }
        
        return view('keluhanpelanggan.edit', [
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
            return redirect()->route('keluhanpelanggan.index')->with('error_message', 'Keluhan Pelanggan dengan ID '.$id.' tidak ditemukan');
        }
        
        $keluhan->update($request->all());
        
        return redirect()->route('keluhanpelanggan.index')->with('success_message', 'Berhasil mengubah Keluhan');
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
        
        return redirect()->route('keluhanpelanggan.index')->with('success_message', 'Berhasil menghapus Keluhan');
    }
}
