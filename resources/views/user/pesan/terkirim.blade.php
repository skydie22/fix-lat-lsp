@extends('layouts.master')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>penerima</th>
            <th>Judul pesan</th>
            <th>isi pesan </th>
            <th>status pesan</th>
            <th>tanggal kirim</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pesanTerkirim as $p)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $p->penerima->fullname }}</td>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->isi }}</td>
                <td>{{ $p->status }}</td>
                <td>{{ $p->tanggal_kirim }}</td>
                {{-- <td>{{ $p->denda }}</td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
@endsection