
@extends('layouts.master')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Peminjaman Buku</h3>
            
            </div>

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <p>Data Peminjaman Buku</p>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Kondisi Buku Saat Dipinjam </th>
                            <th>Kondisi Buku Saat Dikembalikan</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPeminjaman as $p)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->user->fullname }}</td>
                            <td>{{ $p->buku->judul }}</td>
                            <td>{{$p->tanggal_peminjaman  }}</td>
                            <td>{{ $p->tanggal_pengembalian }}</td>
                            <td>{{ $p->kondisi_buku_saat_dipinjam  }}</td>
                            <td>{{ $p->kondisi_buku_saat_dikembalikan  }}</td>
                            <td>{{ $p->denda  }}</td>

                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection