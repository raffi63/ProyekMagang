@extends('adminlte::page')

@section('title', 'List Keluhan')

@section('content_header')
<h1 class="m-0 text-dark">List Keluhan</h1>
@stop

@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body table-responsive">
<a href="{{ route('keluhan.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i>Tambah</a>
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>User</th>
<th>Nama Pelanggan</th>
<th>Penyedia</th>
<th>Keterangan</th>
<th>Waktu Visit</th>
<th>Action Keterangan</th>
<th>Waktu Selesai</th>
<th>Teknisi</th>
<th>Status</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($keluhan as $key => $keluhan)
<tr>
<td>{{ $key+1 }}</td>
<td>{{$keluhan->fusers->name}}</td>
<td>{{ $keluhan->namapelanggan }}</td>
<td>{{ $keluhan->penyedia }}</td>
<td>{{ $keluhan->keterangan }}</td>
<td>{{ $keluhan->waktu_visit }}</td>
<td>{{ $keluhan->action_keterangan }}</td>
<td>{{ $keluhan->waktu_selesai }}</td>
<td>{{ $keluhan->teknisi }}</td>
<td>{{ $keluhan->status }}</td>
<td>
<a href="{{ route('keluhan.edit', $keluhan) }}"
    class="btn btn-primary btn-xs">Edit</a>
<a href="{{ route('keluhan.destroy', $keluhan) }}"
    onclick="notificationBeforeDelete(event, this)"
    class="btn btn-danger btn-xs">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@stop

@push('js')
<form action="" id="delete-form" method="post">
@method('delete')
@csrf
</form>
<script>
$('#example2').DataTable({
"responsive": true,
"scrollX": true, // Enable horizontal scrolling
"scrollY": "calc(100vh - 350px)", // Set vertical scrolling height
"scrollCollapse": true, // Collapse table height when no enough rows
});

function notificationBeforeDelete(event, el) {
event.preventDefault();
if (confirm('Apakah anda yakin akan menghapus data?')) {
$("#delete-form").attr('action', $(el).attr('href'));
$("#delete-form").submit();
}
}
</script>
@endpush
