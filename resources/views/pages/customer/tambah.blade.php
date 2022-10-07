@extends('layouts.master')

@section('title', 'Tambah Customer')

@section('judul', 'Tambah Customer')

@section('content')

<div class="col-md-12">
    <form action="/customer/store" method="POST">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="InputNIK" class="form-label">NIK</label>
            <input type="number" name="nik" class="form-control" id="InputNIK">
        </div>

        <div class="mb-3">
            <label for="InputNama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="">
        </div>

        <div class="mb-3">
            <label for="InputJenkel" class="form-label">Jenis kelamin</label>
            <select name="jenkel" class="form-control" id="InputJenkel">
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="InputTlp" class="form-label">Telepon</label>
            <input type="number" name="no_telp" class="form-control" id="InputTlp">
        </div>

        <div class="mb-3">
            <label for="Inputemail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="Inputemail">
        </div>

        <div class="mb-3">
            <label for="InputAlamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="InputAlamat" rows="3">

            </textarea>
        </div>

        <button class="btn btn-primary">Tambah</button>

    </form>
    

</div>

@endsection