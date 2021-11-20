@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Tambah Data Mahasiswa</h2>
        <div class="pull-right"></div>
        <a class="btn btn-primary" href="{{route('mahasiswa.index')}}">Kembali</a>
    </div>
        </div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Ada Masalah Dengan Inputan Anda <br><br>
    <ul>
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif


<form action="{{route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM:</strong>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Mahasiswa:</strong>
            <input type="text" name="namamhs" class="form-control" placeholder="Masukkan Nama Mahasiswa">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            <select id="jk" class="form-control form-select" name="jk">
                <option value="">Pilih</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota:</strong>
            <input type="text" name="kota" class="form-control" placeholder="Masukkan Kota">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto:</strong>
            <input type="file" name="foto" class="form-control" placeholder="Foto">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>

@endsection