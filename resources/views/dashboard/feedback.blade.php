@extends('dashboard.layouts.main')
@section('title', 'Form Feedback')
@section('container')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Feedback</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">Nama Sekolah </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rating"
                                    class="col-md-4 col-form-label text-md-right">Rating</label>

                                <div class="col-md-6">
                                    <select id="rating" name="rating" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="impression"
                                    class="col-md-4 col-form-label text-md-right">Kesan</label>

                                <div class="col-md-6">
                                    <textarea id="impression" class="form-control" name="impression" rows="4" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h3 class="card-title"> Tabel Divisi </h3>
              <a href="/dashboard-divisi/create" class="ml-auto btn btn-primary rounded-0 btn-sm"> Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr >
                  <th>No</th>
                  <th>Nama Divisi</th>
                  <th style="width: 175px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($feedback as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->rating}}</td>
                      <td>{{$item->pesan}}</td>
                      
                      <td class="text-center">
                        <div>
                            <a href="/dashboard-divisi/{{ $item->id }}/edit" class="btn btn-success btn-sm rounded-0"><i class="fa fa-edit"></i> Ubah</a>
                            <button type="button" class="btn btn-warning btn-sm rounded-0 swalDeleteButton" data-toggle="modal" data-target="#modal-delete{{ $item->id }}">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </div>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection
