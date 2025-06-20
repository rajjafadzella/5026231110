@extends('template')

@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nama</label>
            </div>
            <div class="col-6">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Jabatan</label>
            </div>
            <div class="col-6">
                <input type="text" name="jabatan" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Umur</label>
            </div>
            <div class="col-6">
                <input type="text" name="umur" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Alamat</label>
            </div>
            <div class="col-6">
                <input type="text" name="alamat" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2"></div>
            <div class="col-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection
