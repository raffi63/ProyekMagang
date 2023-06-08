@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
<h1 class="m-0 text-dark">Lengkapi Data Pendaftaran</h1>
@stop
@section('content')
<form action="{{ route('daftar.update', $user) }}"  method="post" enctype="multipart/form-data" >
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="no_ktp">Nomor KTP</label>
<input type="text" class="form-control @error('no_ktp') is-invalid @enderror"
id="no_ktp" placeholder="Masukkan Nomor KTP" name="no_ktp"
value="{{ $user->no_ktp ?? old('no_ktp') }}">
@error('no_ktp')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="foto_ktp" class="form-label">Foto Ktp</label>
<img src="/img/no-image.png" class="img-thumbnail d-block" name="tampil" alt="..." width="15%" id="tampil">
<input class="form-control @error('foto_ktp') is-invalid @enderror" type="file" id="foto_ktp" name="foto_ktp">
@error('foto_ktp') <span class="text-danger">{{$message}}</span> @enderror
</div> 

<div class="form-group">
<label for="no_wa">Nomor WhatsApp</label>
<input type="text" class="form-control @error('no_wa') is-invalid @enderror"
id="no_wa" placeholder="Masukkan Nomor WhatsApp" name="no_wa">
@error('no_wa')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>


<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control @error('alamat') is-invalid @enderror"
id="alamat" placeholder="Masukkan Alamat" name="alamat">
@error('alamat')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="detail_alamat">Detail Alamat</label>
<input type="text" class="form-control @error('detail_alamat') is-invalid @enderror"
id="detail_alamat" placeholder="Masukkan Detail Alamat" name="detail_alamat"
value="{{ $user->detail_alamat ?? old('detail_alamat') }}">
@error('detail_alamat')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>


<div class="form-group">
<label for="paket">Paket Internet</label>
<select class="form-control @error('paket') isinvalid @enderror" id="paket"
name="paket">
<option value="h1" @if ($user->paket == 'h1' || old('paket') == 'h1') selected @endif>Paket Internet H1</option>
<option value="h2" @if ($user->paket == 'h2' || old('paket') == 'h2') selected @endif>Paket Internet H2</option>
<option value="h3" @if ($user->paket == 'h3' || old('paket') == 'h3') selected @endif>Paket Internet H3</option>
<option value="h4" @if ($user->paket == 'h4' || old('paket') == 'h4') selected @endif>Paket Internet H4</option>
</select>
@error('paket')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('home') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
@stop
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
var searchInput = 'alamat';

$(document).ready(function(){
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(
        searchInput)), {
        types: ['geocode'],
    });
});
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG2YHIuPJYMOJzS6wSw5eZ0dTYXnhZFLs&libraries=places"></script>
<script>
function readURL(input){
if(input.files && input.files[0]){
var reader = new FileReader();
reader.onload = function(e){
$('#tampil').attr('src', e.target.result);
} 
reader.readAsDataURL(input.files[0]);
} 
} 
$("#foto_ktp").change(function(){
readURL(this);
});
</script>
@endpush
