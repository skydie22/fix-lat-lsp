
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
                            <th>Nama Lengkap</th>
                            <th>Nama Pengguna</th>
                            <th>Kata Sandi</th>
                            <th>Terakhir Login </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin as $a)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$a->fullname  }}</td>
                            <td>{{ $a->username }}</td>
                            <td>{{ $a->password }}</td>
                            <td>{{ $a->terakhir_login  }}</td>


                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection