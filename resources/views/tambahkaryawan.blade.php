@extends('template')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Data Karyawan</h3>

    <form action="/karyawan/store" method="POST" class="form-horizontal">
        @csrf

        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-6">
                <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-6">
                <input type="text" name="divisi" id="divisi" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-6">
                <input type="text" name="departemen" id="departemen" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-6">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/karyawan" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form>
</div>
@endsection
