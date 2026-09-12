<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class sppController extends Controller
{
    public function spp(){
        // $spp = DB::table('spp')->get();
        $siswa = DB::table('siswa')->get();
        $dataSiswa = DB::table('spp')
        ->join('siswa', 'spp.id_siswa', '=', 'siswa.id')
        ->select('spp.id','siswa.nama as nama_siswa','spp.nominal_pembayaran as nominal', 'spp.tgl_bayar as tgl')
        ->get();
        return view('database.spp',[
            'siswa' => $siswa,
            'spp' => $dataSiswa
        ]);
        
    }
    public function simpan(Request $req){
        $validated = $req->validate([
            'nominal_pembayaran' => ['required', 'integer'],
            'tgl_bayar' => ['required']
        ]);
        $id_siswa = $req->id_siswa;
        $nominal_bayar = $req->nominal_pembayaran;
        $tgl_bayar = $req->tgl_bayar;

        
        DB::table('spp')->insert([
            'id_siswa' => $id_siswa,
            'nominal_pembayaran' => $nominal_bayar,
            'tgl_bayar' => $tgl_bayar
        ]);
        return redirect()->back();
    }
}
