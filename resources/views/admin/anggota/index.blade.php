
@extends('layouts.master')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Anggota</h3>
            
            </div>

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <p>Data Anggota</p>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Anggota</th>
                            <th>Nis</th>
                            <th>Nama Anggota</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Alamat </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $a)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $a->kode }}</td>
                            <td>{{ $a->nis }}</td>
                            <td>{{ $a->username }}</td>
                            <td>{{$a->fullname  }}</td>
                            <td>{{ $a->kelas }}</td>
                            <td>{{ $a->alamat  }}</td>


                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection