@extends('layouts.master')

@section('title', 'Tambah Mobil')

@section('judul', 'Tambah Mobil')

@section('content')

<div class="col-md-12">
    <form action="/mobil/store"  method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="InputFoto" class="form-label">Plat Mobil</label>
            <input type="file" name="foto_mobil" class="form-control" id="InputFoto">
        </div>

        <div class="mb-3">
            <label for="InputPlat" class="form-label">Plat Mobil</label>
            <input type="text" name="plat_mobil" class="form-control" id="InputPlat">
        </div>

        <div class="mb-3">
            <label for="InputNamaMobil" class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" class="form-control" id="InputNamaMobil">
        </div>

        <div class="mb-3">
            <label for="InputMerk" class="form-label">Merk Mobil</label>    
            <select name="id_merk" class="form-control" id="InputMerk">
                @foreach($merk as $m)

                    <option value="{{ $m->id_merk }}">{{ $m->merk }}</option>
                
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="InputTahun" class="form-label">Tahun</label>
            <input type="date" name="tahun" class="form-control" id="InputTahun">
        </div>

        <div class="mb-3">
            <label for="InputHarga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="InputHarga">
        </div>

        <div class="mb-3">
            <label for="InputWarna" class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" id="InputWarna">
        </div>

        <button class="btn btn-primary">Tambah</button>

    </form>
    

</div>

@endsection