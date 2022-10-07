@extends('layouts.master')

@section('title', 'Edit Mobil')

@section('judul', 'Edit Mobil')

@section('content')

<div class="col-md-12">
    <form action="/mobil/update/{{ $mobil->id_mobil }}" method="POST">

        {{ csrf_field() }}

        <div class="mb-3">
            <label for="InputPlat" class="form-label">Plat Mobil</label>
            <input type="text" name="plat_mobil" value="{{ $mobil->plat_mobil }}" class="form-control" id="InputPlat">
        </div>

        <div class="mb-3">
            <label for="InputNamaMobil" class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" value="{{ $mobil->nama_mobil }}" class="form-control" id="InputNamaMobil">
        </div>

        <div class="mb-3">
            <label for="InputNamaMobil" class="form-label">Merk Mobil</label>
            <select name="id_merk" id="">
                <!-- @foreach($merk as $m)
                    @if($m->id_merk == merk )
                    <option value="{{  }}"></option>
                    @endif
                @endforeach -->
                <option value=""></option>
    
            </select>
            <input type="text" name="merk_mobil" value="{{ $mobil->merk_mobil }}" class="form-control" id="InputNamaMobil">
        </div>

        <div class="mb-3">
            <label for="InputTahun" class="form-label">Tahun</label>
            <input type="date" name="tahun" value="{{ $mobil->tahun }}" class="form-control" id="InputTahun">
        </div>

        <div class="mb-3">
            <label for="InputHarga" class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $mobil->harga }}" class="form-control" id="InputHarga">
        </div>

        <div class="mb-3">
            <label for="InputWarna" class="form-label">Warna</label>
            <input type="text" name="warna" value="{{ $mobil->warna }}" class="form-control" id="InputWarna">
        </div>

        <button class="btn btn-primary">Update</button>

    </form>
    

</div>

@endsection