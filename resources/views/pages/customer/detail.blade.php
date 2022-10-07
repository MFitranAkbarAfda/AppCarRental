@extends('layouts.master')

@section('title', 'Detail Customer')

@section('judul', 'Detail Customer')

@section('content')

<div class="col-md-6">
    
    <a href="/customer" class="btn btn-danger btn-sm mb-3">Back</a>
    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title">NIK  : {{ $customer->nik }}</h5>
            <h6>Nama    :   {{ $customer->nama }}</h6>
            <h6>Email       :   {{ $customer->email }}</h6>

            <!-- Jenis Kelamin -->
            @if($customer->jenkel == "L")
                <h6>Jenis Kelamin   :   Laki - laki</h6>
            @elseif($customer->jenkel == "P")
                <h6>Jenis Kelamin   :   Perempuan</h6>
            @endif
            <!-- End Jenis Kelamin -->

            <h6>Telepon     :   {{ $customer->no_telp }}</h6>
            <br>
            <h6>Alamat      :   {{ $customer->alamat }}</h6>
            
        </div>
    </div>

</div>

@endsection