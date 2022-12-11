<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikController extends Controller
{
    public function index(){
        $pemilik = Pemilik::all();
        $all = Pemilik::withCount('Pegawais')->get();
        return view('pemilik.index', compact('pemilik','all'));
    }

    public function create(){
        return view('pemilik.create');
    }

    public function createpegawai(){
        $pemilik = Pemilik::get();
        return view('pegawai.create',compact('pemilik'));
    }

    public function store(Request $request){
        Pemilik::create($request->all());
        return redirect()->route('pemiliks.index')->with('success', 'Pemilik Berhasil Ditambahkan');
    }

    public function storeproduct(Request $request){
        Pegawai::create($request->all());
        return redirect()->route('pemiliks.index')->with('success', 'Pegawai Berhasil Ditambahkan');
    }
}
