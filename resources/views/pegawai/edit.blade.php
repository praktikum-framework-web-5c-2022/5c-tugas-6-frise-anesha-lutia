@extends('layouts.app')
@section('title')
@section('content')
<h1 class="mb-3">Edit Pegawai</h1>
<form action="{{ route('pegawais.updatepegawai',$pegawai->id) }}" method="POST">
  @method('put')
    @csrf 
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemilik_id" value="{{ $pegawai->pemilik_id }}" hidden>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">No Identitas</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_identitas">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_pegawai">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jabatan">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Umur</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="umur">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection