@extends('template')

@section('content')
    <h3>Tambah Data Sepeda Motor</h3>

    <a href="/sepedamotor">Kembali</a>

    <br />
    <br />

    <form action="/sepedamotor/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk</label>
            </div>
            <div class="col-6">
                <input type="text" name="merksepedamotor" required class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargasepedamotor" required class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia</label>
            </div>
            <div class="col-6">
                <select name="tersedia" class="form-control">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (kg)</label>
            </div>
            <div class="col-6">
                <input type="number" name="berat" step="0.01" required class="form-control">
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
