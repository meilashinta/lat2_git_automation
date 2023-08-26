@extends('dashboard.layouts.main')
@section('title','Histori Kunjungan')
@section('container')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Histori Kunjungan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Histori Kunjungan</li>
                </ol>
            </div><!-- /.col -->
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Sekolah </th>
                        <th>Tanggal Kunjungan</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Petugas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historiKunjungan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kunjunganPetugas->jadwalKunjungan->user->name }}</td>
                            <td>{{ $item->kunjunganPetugas->jadwalKunjungan->tgl_kunjungan }}</td>
                            <td>{{ $item->kunjunganPetugas->jadwalKunjungan->jam_mulai }}</td>
                            <td>{{ $item->kunjunganPetugas->jadwalKunjungan->jam_selesai }}</td>
                            <td>{{ $item->kunjunganPetugas->petugas->nama_pegawai }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            
        });
    });
</script>
@endsection