@extends('adminlte::page')

@section('title', 'List Pembayaran')

@section('content_header')
<h1 class="m-0 text-dark">List Pembayaran</h1>
@stop

@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body table-responsive">
<a href="{{ route('bayar.create') }}" class="btn btn-primary mb-2">Tambah</a>
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Metode</th>
<th>Foto</th>
<th>Kode Pelanggan</th>
</tr>
</thead>
<tbody>
@foreach($pembayaran as $key => $pembayaran)
@if ($pembayaran->fpelanggan->fusers->id == Auth::id())
<tr>
<td>{{ $key+1 }}</td>
<td>{{ $pembayaran->metode }}</td>
<td><img src="storage/{{$pembayaran->foto}}" alt="{{$pembayaran->foto}} tidak tampil" class="img-thumbnail" width="15%"></td>
<td>{{ $pembayaran->fpelanggan->kode }}</td>
</tr>
@endif
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
