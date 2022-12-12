<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($id){
        $pemilik = Pemilik::find($id);
        $pegawai = Pegawai::where('pemilik_id', $id)->get();
        return view('pegawai.index',compact('pegawai','pemilik'));
    }

    public function edit(Pegawai $pegawai, $id){
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit',compact('pegawai'));
    }
    
    public function updatepegawai(Request $request,$id){
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect()->route('pemiliks.index')->with('success', 'Pegawai Berhasil Diubah');
    }

    public function destroy($id){
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pemiliks.index')->with('success', 'Pemilik Berhasil Diubah');
    }
}
