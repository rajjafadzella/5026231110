@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <a href="/eas/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newkaryawan as $k)
                <tr>
                    <td>{{ $k->NIP }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->pangkat }}</td>
                    <td>{{ $k->gaji }}</td>
                    <td>
                        <a href="/eas/hapus/{{ $k->NIP }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    {{ $newkaryawan->links() }}
@endsection
