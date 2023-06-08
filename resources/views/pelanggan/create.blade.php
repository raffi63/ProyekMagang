@extends('adminlte::page')
@section('title', 'Tambah pelanggan')
@section('content_header')
<h1 class="m-0 text-dark">Tambah pelanggan</h1>
@stop
@section('content')
<form action="{{route('pelanggan.store')}}" method="post">
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="form-group">
<label for="kode">Kode</label>
<input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode"
placeholder="Kode" name="kode" value="{{old('kode')}}">
@error('kode') <span class="text-danger">{{$message}}</span> @enderror
</div>

<div class="form-group">
<label for="status">Status</label>
<select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
<option value="waiting" {{ old('status') == 'waiting' ? 'selected' : '' }}>Waiting</option>
<option value="approved" {{ old('status') == 'approved' ? 'selected' : '' }}>Approved</option>
<option value="survey" {{ old('status') == 'survey' ? 'selected' : '' }}>Survey</option>
</select>
@error('status') <span class="text-danger">{{$message}}</span> @enderror
</div>

<div class="form-group">
<label for="id_users">Pendaftaran</label>
<div class="input-group">
<input type="hidden" name="id_users" id="id_users" value="{{ old('id_users') }}">
<input type="text" class="form-control @error('name') is-invalid @enderror"
placeholder="Cari Pendaftaran" id="name" name="name"
value="{{ old('name') }}" aria-label="Cari Pendaftaran" aria-describedby="cari"
readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
data-bs-target="#staticBackdrop"></i>Cari Data Pendaftaran</button>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{route('pelanggan.index')}}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
arialabelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Pendaftaran</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Pendaftaran</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($users as $key => $users)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $users->name }}</td>
<td>
<button type="button" class="btn btn-primary btn-xs"
onclick="pilih('{{ $users->id }}', '{{ $users->name }}')"
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
$('#example2').DataTable({
"responsive": true,
});

function pilih(id, name) {
document.getElementById('id_users').value = id
document.getElementById('name').value = name
}
</script>
@endpush
