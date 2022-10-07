@extends('layouts.master')

@section('title', 'Customer')

@section('judul', 'Customer')

@section('content')

<a href="/customer/tambah" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i> Tambah</a>

<div class="col-12">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Customer</h4>
            
            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">email</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $d->nik }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->email }}</td>
                            <td>
                                <a href="/customer/detail/{{ $d->id_customer }}" class="btn btn-success btn-sm">Detail</a>
                                <a href="/customer/edit/{{ $d->id_customer }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/customer/hapus/{{ $d->id_customer }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
</div>


@endsection