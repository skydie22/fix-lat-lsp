
@extends('layouts.master')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Penerbit</h3>
            
            </div>

        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <p>Data Penerbit</p>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Penerbit</th>
                            <th>Nis</th>
                            <th>Nama Penerbit</th>
                            <th>Status</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPenerbit as $p)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->kode }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->verif }}</td>
                           


                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection