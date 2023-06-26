@extends('adminlte::page')
@section('title', 'Edit Keluhan')
@section('content_header')
<h1 class="m-0 text-dark">Edit Keluhan</h1>
@stop
@section('content')
<form action="{{route('keluhanmarketing.update', $keluhan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="namapelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control @error('namapelanggan') is-invalid @enderror" id="namapelanggan"
                            placeholder="namapelanggan" name="namapelanggan" value="{{$keluhan->namapelanggan ?? old('namapelanggan')}}">
                        @error('namapelanggan') <span class="textdanger">{{$message}}</span> @enderror
                    </div>

                    <!-- Bottom Command -->

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select class="form-select @error('keterangan') isinvalid @enderror" id="keterangan" name="keterangan">
                            <option value="instalasi" @if($keluhan->keterangan == 'instalasi' ||
                                old('keterangan') == 'instalasi')selected @endif>instalasi</option>
                            <option value="maintenance" @if($keluhan->keterangan == 'maintenance' ||
                                old('keterangan') == 'maintenance')selected @endif>maintenance</option>
                        </select>
                    </div>
                    <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('keluhanmarketing.index')}}" class="btn btn-default">
                    Batal
                </a>
            </div>
    @stop
    @push('js')
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

    </script>