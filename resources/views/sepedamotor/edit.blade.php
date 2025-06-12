@extends('template')

@section('content')
    <h3>Edit Sepeda Motor</h3>

    <a href="/sepedamotor">Kembali</a>

    <br />
    <br />

    <form action="/sepedamotor/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $motor->ID }}">

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk</label>
            </div>
            <div class="col-6">
                <input type="text" name="merksepedamotor" required class="form-control" value="{{ $motor->merksepedamotor }}">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargasepedamotor" required class="form-control" value="{{ $motor->hargasepedamotor }}">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia</label>
            </div>
            <div class="col-6">
                <select name="tersedia" class="form-control">
                    <option value="1" {{ $motor->tersedia ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ !$motor->tersedia ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (kg)</label>
            </div>
            <div class="col-6">
                <input type="text" name="berat" required class="form-control" value="{{ $motor->berat }}">
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
