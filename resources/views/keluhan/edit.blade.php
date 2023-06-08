@extends('adminlte::page')

@section('title', 'Edit Keluhan')

@section('content_header')
<h1 class="m-0 text-dark">Edit Keluhan</h1>
@stop

@section('content')
<form action="{{ route('keluhan.update', $keluhan) }}" method="post">
@csrf
@method('put')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="exampleInputNamaPelanggan">Nama Pelanggan</label>
<input type="text" class="form-control @error('namapelanggan') is-invalid @enderror"
id="exampleInputNamaPelanggan" placeholder="Masukkan Nama Pelanggan"
name="namapelanggan" value="{{ $keluhan->namapelanggan }}">
@error('namapelanggan') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputPenyedia">Penyedia</label>
<select class="form-control @error('penyedia') is-invalid @enderror"
id="exampleInputPenyedia" name="penyedia">
<option value="asnet" {{ $keluhan->penyedia === 'asnet' ? 'selected' : '' }}>Asnet</option>
<option value="sengked" {{ $keluhan->penyedia === 'sengked' ? 'selected' : '' }}>Sengked</option>
</select>
@error('penyedia') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputKeterangan">Keterangan</label>
<select class="form-control @error('keterangan') is-invalid @enderror"
id="exampleInputKeterangan" name="keterangan">
<option value="instalasi" {{ $keluhan->keterangan === 'instalasi' ? 'selected' : '' }}>Instalasi</option>
<option value="maintenance" {{ $keluhan->keterangan === 'maintenance' ? 'selected' : '' }}>Maintenance</option>
</select>
@error('keterangan') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputWaktuVisit">Waktu Visit</label>
<input type="datetime-local" class="form-control @error('waktu_visit') is-invalid @enderror"
id="exampleInputWaktuVisit" name="waktu_visit" value="{{ $keluhan->waktu_visit }}">
@error('waktu_visit') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputActionKeterangan">Action Keterangan</label>
<input type="text" class="form-control @error('action_keterangan') is-invalid @enderror"
id="exampleInputActionKeterangan" placeholder="Masukkan Action Keterangan"
name="action_keterangan" value="{{ $keluhan->action_keterangan }}">
@error('action_keterangan') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputWaktuSelesai">Waktu Selesai</label>
<input type="datetime-local"
class="form-control @error('waktu_selesai') is-invalid @enderror"
id="exampleInputWaktuSelesai" name="waktu_selesai" value="{{ $keluhan->waktu_selesai }}">
@error('waktu_selesai') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputTeknisi">Teknisi</label>
<input type="text" class="form-control @error('teknisi') is-invalid @enderror"
id="exampleInputTeknisi" placeholder="Masukkan Teknisi" name="teknisi"
value="{{ $keluhan->teknisi }}">
@error('teknisi') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputStatus">Status</label>
<select class="form-control @error('status') is-invalid @enderror" id="exampleInputStatus"
name="status">
<option value="proses_perbaikan" {{ $keluhan->status === 'proses_perbaikan' ? 'selected' : '' }}>Proses Perbaikan</option>
<option value="selesai" {{ $keluhan->status === 'selesai' ? 'selected' : '' }}>Selesai</option>
</select>
@error('status') <span class="text-danger">{{ $message }}</span> @enderror
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('keluhan.index') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
</form>
@stop
