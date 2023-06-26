@extends('adminlte::page')
@section('title', 'Validasi Keluhan')
@section('content_header')
<h1 class="m-0 text-dark">Validasi Keluhan</h1>
@stop
@section('content')
<form action="{{route('keluhanteknisi.update', $keluhan)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="teknisi">Nama Teknisi</label>
                        <input type="text" class="form-control @error('teknisi') is-invalid @enderror" id="teknisi"
                            placeholder="Nama Teknisi" name="teknisi" value="{{$keluhan->teknisi ?? old('teknisi')}}">
                        @error('teknisi') <span class="textdanger">{{$message}}</span> @enderror
                    </div>

                    <!-- Bottom Command -->
                    <div class="form-group">
                        <label for="action_keterangan">Keterangan</label>
                        <input type="text-area" class="form-control @error('action_keterangan') is-invalid @enderror" id="action_keterangan"
                            placeholder="Keterangan" name="action_keterangan" value="{{$keluhan->action_keterangan ?? old('action_keterangan')}}">
                        @error('action_keterangan') <span class="textdanger">{{$message}}</span> @enderror
                    </div>

                    <!-- Bottom Command -->

                    <div class="form-group">
                        <label for="waktu_visit">Waktu Visit</label>
                        <input type="datetime-local" class="form-control @error('waktu_visit') is-invalid @enderror" id="waktu_visit"
                            placeholder="Waktu Visit" name="waktu_visit" value="{{$keluhan->waktu_visit ?? old('waktu_visit')}}">
                        @error('waktu_visit') <span class="textdanger">{{$message}}</span> @enderror
                    </div>

                    <!-- Bottom Command -->
                        <input type="hidden" class="form-control @error('status') is-invalid @enderror" id="status"
                            placeholder="Waktu Visit" name="status" value="proses_perbaikan">
                        @error('status') <span class="textdanger">{{$message}}</span> @enderror
                    <!-- Bottom Command -->

                    
                    <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('keluhanteknisi.index')}}" class="btn btn-default">
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