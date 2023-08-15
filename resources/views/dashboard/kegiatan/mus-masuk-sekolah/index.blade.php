
@extends('dashboard.layouts.main')
@section('container')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Daftar Sekolah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Daftar Sekolah</li>
              </ol>
            </div><!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h3 class="card-title"> Tabel Sekolah </h3><br>
                <a href="/admin-pengguna/create" class="ml-auto btn btn-primary rounded-0 btn-sm"> Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Tingkat</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th style="width: 175px">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td >
                            <a href="" class="btn btn-success btn-sm  rounded-0"><i class="fa fa-edit"></i>Ubah</a>
                            <button type="button" class="btn btn-danger btn-sm rounded-0" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fa fa-trash"></i>Hapus</button>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection