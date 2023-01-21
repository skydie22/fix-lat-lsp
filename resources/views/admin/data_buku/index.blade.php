
@extends('layouts.master')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Administrator</h3>
            
            </div>

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <p>Data Administrator</p>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Jumlah Buku Baik </th>
                            <th>Jumlah Buku rusak </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataBuku as $a)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$a->judul  }}</td>
                            <td>{{ $a->pengarang }}</td>
                            <td>{{ $a->penerbit->nama }}</td>
                            <td>{{ $a->j_buku_baik  }}</td>
                            <td>{{ $a->j_buku_rusak  }}</td>


                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection