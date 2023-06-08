@extends('adminlte::page')
@section('title', 'Tambah pembayaran')
@section('content_header')
<h1 class="m-0 text-dark">Tambah pembayaran</h1>
@stop
@section('content')
<form action="{{ route('bayar.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="form-group">
<label for="metode">Metode</label>
<select class="form-control @error('metode') is-invalid @enderror" id="metode"
name="metode">
<option value="BRI" {{ old('metode') == 'BRI' ? 'selected' : '' }}>BRI</option>
<option value="BCA" {{ old('metode') == 'BCA' ? 'selected' : '' }}>BCA</option>
<option value="Mandiri" {{ old('metode') == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
</select>
@error('metode') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="form-group">
<label for="foto" class="form-label">Foto</label>
<img src="/img/no-image.png" class="img-thumbnail d-block" name="tampil" alt="..." width="15%" id="tampil">
<input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto">
@error('foto') <span class="text-danger">{{$message}}</span> @enderror
</div> 


<div class="form-group">
<label for="kode_pelanggan">Kode Pelanggan</label>
<div class="input-group">
<input type="hidden" name="kode_pelanggan" id="kode_pelanggan"
value="{{ old('kode_pelanggan') }}">
<input type="text" class="form-control @error('kode') is-invalid @enderror"
placeholder="Cari Kode Pelanggan" id="kode" name="kode"
value="{{ old('kode') }}" aria-label="Cari Kode Pelanggan"
aria-describedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
data-bs-target="#staticBackdrop">Cari Kode Pelanggan</button>
</div>
@error('kode') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('bayar.index') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
{{-- </form> --}}

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
arialabelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Kode Pelanggan</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<table class="table table-hover table-bordered table-stripped" id="tablePelanggan">
<thead>
<tr>
<th>No.</th>
<th>Kode Pelanggan</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($pelanggan as $key => $pelanggan)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $pelanggan->kode }}</td>
<td>
<button type="button" class="btn btn-primary btn-xs"
onclick="pilihkode('{{ $pelanggan->kode }}', '{{ $pelanggan->kode }}')"
data-bs-dismiss="modal">Pilih</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- End Modal -->
@stop

@push('js')
<script>
$('#tablePelanggan').DataTable({
"responsive": true,
});

function pilihkode(kode_pelanggan, kode) {
document.getElementById('kode_pelanggan').value = kode_pelanggan
document.getElementById('kode').value = kode
}
function readURL(input){
if(input.files && input.files[0]){
var reader = new FileReader();
reader.onload = function(e){
$('#tampil').attr('src', e.target.result);
} 
reader.readAsDataURL(input.files[0]);
} 
} 
$("#foto").change(function(){
readURL(this);
});
</script>
@endpush
