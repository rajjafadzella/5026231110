@extends('template')

@section('content')
    <h3>Data Sepeda Motor</h3>

    <a href="/sepedamotor/tambah" class="btn btn-primary mb-3">+ Tambah Sepeda Motor Baru</a>

    <form action="/sepedamotor/cari" method="GET" class="d-flex align-items-center mb-3" style="gap: 10px;">
        <label class="form-label mb-0">Cari Sepeda Motor:</label>
        <input type="text" name="cari" class="form-control w-auto" placeholder="Cari Merk / Tipe.." value="{{ request('cari') }}">
        <button type="submit" class="btn btn-primary">CARI</button>
    </form>

    <table class="table table-striped">
    <tr>
        <th>Merk</th>
        <th>Harga</th>
        <th>Tersedia</th>
        <th>Berat</th>
        <th>Opsi</th>
    </tr>
    @foreach ($sepedamotor as $sm)
        <tr>
            <td>{{ $sm->merksepedamotor }}</td>
            <td>{{ $sm->hargasepedamotor }}</td>
            <td>{{ $sm->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $sm->berat }} kg</td>
            <td>
                <a href="/sepedamotor/edit/{{ $sm->ID }}" class="btn btn-success">Edit</a>
                <a href="/sepedamotor/hapus/{{ $sm->ID }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

    {{ $sepedamotor->links() }}
@endsection
