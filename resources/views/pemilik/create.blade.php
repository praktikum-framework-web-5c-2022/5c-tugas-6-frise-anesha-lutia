@extends('layouts.app');
@section('title')
@section('content')
<h1>Pemilik Perusahaan Baru</h1>
<form action="{{ route('pemiliks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Alamat Perusahaan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat_perusahaan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection