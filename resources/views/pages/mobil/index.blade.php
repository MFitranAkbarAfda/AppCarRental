@extends('layouts.master')

@section('title', 'Mobil')

@section('judul', 'Mobil')

@section('content')

<a href="/mobil/tambah" class="btn btn-primary btn-sm mb-3"><i class="fas fa-plus"></i> Tambah</a>

<div class="col-12">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Mobil</h4>
            
            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto Mobil</th>
                            <th scope="col">Nama Mobil</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mobil as $m)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <th><img src="{{ URL::to('/') }}/foto_mobil/{{ $m->foto_mobil }}" style="width:150px" alt=""></th>
                            <td>{{ $m->nama_mobil }}</td>
                            <td>
                                @foreach($m->merk as $mr)
                                    {{ $mr->merk }}
                                @endforeach
                            </td>
                            <td>{{ $m->tahun }}</td>
                            <td>Rp.{{ number_format($m->harga) }}</td>
                            <td>{{ $m->warna }}</td>
                            <td>
                                <a href="/mobil/detail/{{ $m->id_mobil }}" class="btn btn-success btn-sm">Detail</a>
                                <a href="/mobil/edit/{{ $m->id_mobil }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/mobil/hapus/{{ $m->id_mobil }}" class="btn btn-danger btn-sm">Hapus</a>
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