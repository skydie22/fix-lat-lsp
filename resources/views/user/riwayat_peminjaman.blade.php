@extends('layouts.master')

@section('content')
<div class="container">

    @if (Session('status'))
    <div class="alert alert-{{ session('status') }}" role="alert"></i>
        <strong>{{ session('message') }}</strong>
    </div>
@endif

    <div class="row">
        <div class="col-6">
            <h3>Riwayat Buku yang sedang dipinjam</h3>

        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Kondisi buku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->buku->judul }}</td>
                    <td>{{ $p->tanggal_peminjaman }}</td>
                    <td>{{ $p->kondisi_buku_saat_dipinjam }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

   
@endsection