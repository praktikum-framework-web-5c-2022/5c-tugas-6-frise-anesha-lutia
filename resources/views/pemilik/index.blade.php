@extends('layouts.app');
@section('title')
@section('content')
<div class="row">
    <div class="col-md-12 mb-5">
        <h1 style="font-size:90px; text-align:center">Pemilik Perusahaan</h1>
    </div>
</div>
<div class="row">
    <div class="d-flex justify-content-center mb-5">
        <div class="buton mb-3">
            <a href="{{ route('pemiliks.create') }}" class="btn btn-primary shadow">Tambahkan Pemilik Perusahaan</a>
            <a href="{{ route('pemiliks.createpegawai') }}" class="btn btn-success shadow">Tambahkan Pegawai Perusahaan</a>
        </div>
    </div>
</div>
    <div class="row">
        @foreach ($all as $item)    
        <div class="col-md-4">
            <a href="{{route('pegawais.index',$item->id)}}" style="text-decoration: none; text-transform:lowercase;">
                <div class="card bg-secondary p-2 mb-8 text-light shadow">
                    <div class="card-footer">
                        <div class="d-flex-justify-content-center">
                            <div class="row">
                                <div class="col-md-8 d-flex justify-content-start">
                                    <h5>{{$item->nama}}</h5>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    @if ($item->pegawais_count == 0)
                                    <h5 style="text-align: right">-</h5>
                                    @else
                                    <h5 style="text-align: right"><span>{{ $item->pegawais_count }}</span></h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection