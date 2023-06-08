@extends('adminlte::page')
@section('title', 'Edit Pendaftaran Asnet')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Pendaftaran Asnet</h1>
@stop
@section('content')
    <form action="{{ route('pendaftaran_asnet.update', $pendaftaranAsnet->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaperusahaan">Nama Perusahaan</label>
                            <input type="text" class="form-control @error('namaperusahaan') is-invalid @enderror"
                                id="namaperusahaan" placeholder="Nama Perusahaan" name="namaperusahaan"
                                value="{{ $pendaftaranAsnet->namaperusahaan ?? old('namaperusahaan') }}">
                            @error('namaperusahaan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pic">PIC</label>
                            <input type="text" class="form-control @error('pic') is-invalid @enderror" id="pic"
                                placeholder="PIC" name="pic" value="{{ $pendaftaranAsnet->pic ?? old('pic') }}">
                            @error('pic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kontakpic">Kontak PIC</label>
                            <input type="text" class="form-control @error('kontakpic') is-invalid @enderror"
                                id="kontakpic" placeholder="Kontak PIC" name="kontakpic"
                                value="{{ $pendaftaranAsnet->kontakpic ?? old('kontakpic') }}">
                            @error('kontakpic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bandwidth">Bandwidth</label>
                            <input type="text" class="form-control @error('bandwidth') is-invalid @enderror"
                                id="bandwidth" placeholder="Bandwidth" name="bandwidth"
                                value="{{ $pendaftaranAsnet->bandwidth ?? old('bandwidth') }}">
                            @error('bandwidth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="survey">Survey</label>
                            <select class="form-control @error('survey') is-invalid @enderror" id="survey" name="survey">
                                <option value="sudah" {{ $pendaftaranAsnet->survey == 'sudah' ? 'selected' : '' }}>Sudah
                                </option>
                                <option value="belum" {{ $pendaftaranAsnet->survey == 'belum' ? 'selected' : '' }}>
                                    Belum</option>
                            </select>
                            @error('survey')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kabel">Kabel</label>
                            <input type="text" class="form-control @error('kabel') is-invalid @enderror" id="kabel"
                                placeholder="Kabel" name="kabel"
                                value="{{ $pendaftaranAsnet->kabel ?? old('kabel') }}">
                            @error('kabel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                <option value="po" {{ $pendaftaranAsnet->status == 'po' ? 'selected' : '' }}>PO</option>
                                <option value="belum" {{ $pendaftaranAsnet->status == 'belum' ? 'selected' : '' }}>
                                    Belum</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pendaftaran_asnet.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
