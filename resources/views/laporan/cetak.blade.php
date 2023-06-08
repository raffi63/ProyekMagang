<style>
    table {
        border-collapse: collapse;
        border: 1px solid #ccc;
        width: 100%;
        overflow: auto;
    }

    th,
    td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ccc;
    }
</style>

<h1 class="m-0 text-dark">List Pendaftaran</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-bordered table-stripped" id="example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Nomor KTP</th>
                            <th>Foto KTP</th>
                            <th>Nomor WhatsApp</th>
                            <th>Nomor Alternatif</th>
                            <th>Email</th>
                            <th>Alamat Penagihan</th>
                            <th>Alamat Pemasangan</th>
                            <th>Tanggal Pemasangan</th>
                            <th>Paket</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendaftaran as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->no_ktp }}</td>
                            <td>{{ $item->foto_ktp }}</td>
                            <td>{{ $item->no_wa }}</td>
                            <td>{{ $item->no_alt }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->alamat_penagihan }}</td>
                            <td>{{ $item->alamat_pemasangan }}</td>
                            <td>{{ $item->tanggal_pemasangan }}</td>
                            <td>{{ $item->paket }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
