@extends('layouts.app')
@section('title')
@section('content')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-8">
            <h1>PEGAWAI <span style="text-transform: uppercase">{{ $pemilik->nama }}</span></h1>
            <br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">No Identitas</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pegawai as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->no_identitas}}</td>
                        <td>{{ $item->nama_pegawai }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>
                            <form action="{{ route('pegawais.destroy',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('pegawais.edit',$item->id) }}" class="btn btn-primary">EDIT</a>
                                <button type="submit" class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection