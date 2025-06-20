@extends('template')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Data</h3>

    <form action="/eas/store" method="POST" class="form-horizontal">
        @csrf

        <div class="form-group row">
            <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-6">
                <input type="text" name="NIP" id="NIP" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-6">
                <input type="text" name="pangkat" id="pangkat" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-6">
                <input type="text" name="gaji" id="gaji" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-6">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/eas" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>

@endsection

