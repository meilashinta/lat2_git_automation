@extends('dashboard.layouts.main')
@section('title', 'Laporan Buku Tamu')
@section('container')
<div class="card" >
    <div class="card-header">
        <h3>Laporan Buku Tamu Museum Bagindo Aziz</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal </th>
                        <th>Nama </th>
                        <th>Asal</th>
                        <th>Pekerjaan</th>
                        <th>Usia</th>
                        <th>Kesan</th>
                        <th>Pesan</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($bukutamu as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->asal }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>{{ $item->usia }}</td>
                            <td>{{ $item->kesan }}</td>
                            <td>{{ $item->pesan }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
