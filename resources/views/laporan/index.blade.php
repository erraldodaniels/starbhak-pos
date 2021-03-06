@extends('layouts.template')
@section('content')
<title>Data Laporan | Kasir</title>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-bordered" cellspacing="0">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Customer</th>
                        <th>Total Beli</th>
                        <th>Tanggal Transaksi</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $i => $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$u->kode_transaksi}}</td>
                        <td>{{$u->nama_customer}}</td>
                        <td>{{ "Rp " . number_format($u->total_harga,2,',','.')}}</td>
                        <td>{{$u->tanggal_beli}}</td>
                        <td><a href="/laporan/{{ $u->kode_transaksi}}" class="btn btn-primary btn-sm ml-2">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection