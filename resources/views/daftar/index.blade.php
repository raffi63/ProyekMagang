@extends('adminlte::page')
@section('title', 'List User')
@section('content_header')
<h1 class="m-0 text-dark">List User</h1>
@stop
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body table-responsive">
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Nama</th>
<th>Email</th>
{{-- <th>Status</th> --}}
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($users as $key => $user)
@if ($user->id == Auth::id())
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
{{-- <td>{{$user->fpelanggan->status}}</td> --}}
<td>
<a href="{{ route('daftar.edit', $user) }}" class="btn btn-primary btn-xs">Lengkapi Data</a>
</td>
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

</script>
@endpush
