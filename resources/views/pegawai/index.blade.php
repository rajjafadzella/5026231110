@extends('template')

@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru </a>


	<form action="/pegawai/cari" method="GET" class="d-flex align-items-center mb-3" style="gap: 10px;">
    <label class="form-label mb-0">Cari Data Pegawai:</label>
    <input type="text" name="cari" class="form-control w-auto" placeholder="Cari Pegawai .." value="{{ request('cari') }}">
    <button type="submit" class="btn btn-primary">CARI</button>
</form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}

    {{-- hanya bisa dipakai dengan paginate, saat get harus dihapus --}}
@endsection



