@extends('adminlte::page')
@section('title', 'Keluhan')
@section('content_header')
    <h1 class="m-0 text-dark">List Keluhan</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card overflow-scroll">
                <div class="card-body">
                    <table class="table table-hover table-bordered
table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Email</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Penyedia</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluhan as $key => $bs)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $bs->namapelanggan}}</td>
                                    <td id={{$key+1}}>{{$bs->fusers->email}}</td>
                                    <td>{{ $bs->keterangan}}</td>
                                    @if ($bs->status != null)
                                        <td>{{ $bs->status}}</td>
                                    @else
                                        <td>Menunggu Verifikasi</td>
                                    @endif
                                    <td>{{ $bs->penyedia }}</td>
                                    <td>
                                        <a href="{{ route('keluhanteknisi.edit', $bs) }}" class="btn btn-primary btn-xs">
                                            Verifikasi
                                        </a>
                                        <a href="{{ route('keluhanteknisi.destroy', $bs) }}" onclick="notificationBeforeDelete(event, this)"    class="btn btn-danger btn-xs">
                                            Selesai
                                        </a>
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
            if (confirm('Apakah anda yakin akan selesai ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
