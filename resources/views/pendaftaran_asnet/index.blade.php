@extends('adminlte::page')
@section('title', 'List Pendaftaran Asnet')
@section('content_header')
<h1 class="m-0 text-dark">List Pendaftaran Asnet</h1>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive">
                <a href="{{ route('pendaftaran_asnet.create') }}" class="btn btn-primary mb-2">Tambah</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Perusahaan</th>
                                <th>PIC</th>
                                <th>Kontak PIC</th>
                                <th>Bandwidth</th>
                                <th>Survey</th>
                                <th>Kabel</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pendaftaranAsnet as $key => $pendaftaran)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$pendaftaran->namaperusahaan}}</td>
                                <td>{{$pendaftaran->pic}}</td>
                                <td>{{$pendaftaran->kontakpic}}</td>
                                <td>{{$pendaftaran->bandwidth}}</td>
                                <td>{{$pendaftaran->survey}}</td>
                                <td>{{$pendaftaran->kabel}}</td>
                                <td>{{$pendaftaran->status}}</td>
                                <td>
                                    <a href="{{ route('pendaftaran_asnet.edit', $pendaftaran) }}" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="{{ route('pendaftaran_asnet.destroy', $pendaftaran) }}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">Delete</a>
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
