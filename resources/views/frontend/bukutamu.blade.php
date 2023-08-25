@extends('frontend.layouts.main')
<div class="container">
    <h1>Buku Tamu Pengunjung Museum</h1>

    <form action="/bukutamu" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="asal">Asal:</label>
            <input type="text" name="asal" id="asal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan:</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kesan">Kesan:</label>
            <input type="text" name="kesan" id="kesan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea name="pesan" id="pesan" rows="5" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>