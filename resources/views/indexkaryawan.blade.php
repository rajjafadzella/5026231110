@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/karyawan/tambah" class="btn btn-primary mb-3">+ Tambah Karyawan Baru</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ strtoupper($k->namalengkap) }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td>{{ strtolower($k->departemen) }}</td>
                    <td>
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $karyawan->links() }}
@endsection
