@extends('adminlte::page')
@section('title', 'Tambah Keluhan')
@section('content_header')
<h1 class="m-0 text-dark">Tambah Keluhan</h1>
@stop
@section('content')
<form action="{{ route('keluhanmarketing.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNamaPelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control @error('namapelanggan') is-invalid @enderror"
                            id="exampleInputNamaPelanggan" placeholder="Masukkan Nama Pelanggan" name="namapelanggan"
                            value="{{ old('namapelanggan') }}">
                        @error('namapelanggan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputPenyedia">Penyedia</label>
                        <select class="form-control @error('penyedia') is-invalid @enderror" id="exampleInputPenyedia"
                            name="penyedia">
                            <option value="asnet" {{ old('penyedia') == 'asnet' ? 'selected' : '' }}>Asnet</option>
                            <option value="sengked" {{ old('penyedia') == 'sengked' ? 'selected' : '' }}>Sengked
                            </option>
                        </select>
                        @error('penyedia') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputKeterangan">Keterangan</label>
                        <select class="form-control @error('keterangan') is-invalid @enderror"
                            id="exampleInputKeterangan" name="keterangan">
                            <option value="instalasi" {{ old('keterangan') == 'instalasi' ? 'selected' : '' }}>Instalasi
                            </option>
                            <option value="maintenance" {{ old('keterangan') == 'maintenance' ? 'selected' : '' }}>
                                Maintenance</option>
                        </select>
                        @error('keterangan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control
@error('id_users') is-invalid @enderror" id="id_users" placeholder="Id Users" name="id_users"
                            value="{{ Auth::user()->id }}">
                        @error('id_users') <span class="textdanger">{{$message}}</span> @enderror
                    </div>

                    <!-- <div class="form-group">
                        <label>Penyedia</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="penyedia" id="penyediaL" value="L" @if(old('penyedia')=='asnet'
                                ) checked @endif checked>
                            <label class="form-check-label me-5" for="penyediaL">
                                Asnet
                            </label>
                            <input class="form-check-input" type="radio" name="penyedia" id="penyediaP" value="P" @if(old('penyedia')=='sengked'
                                ) checked @endif>
                            <label class="form-check-label" for="penyediaP">
                                Sengked
                            </label>
                        </div>
                    </div> -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('keluhanmarketing.index') }}" class="btn btn-danger">Batal</a>
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