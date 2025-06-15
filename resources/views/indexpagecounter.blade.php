@extends('template')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Jumlah Pengunjung</h2>
        <div class="text-center display-3">
            {{ $jumlah }}
        </div>
    </div>
@endsection
