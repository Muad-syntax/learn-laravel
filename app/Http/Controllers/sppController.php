<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class sppController extends Controller
{
    public function spp(){
        $spp = DB::table('spp')->get();
        $id_siswa = DB::table('spp')->select('id_siswa');
        return view('database.spp', ['spp' => $spp]);
    }
    public function simpan(Request $req){
        $id_siswa = $req->id_siswa;
        $nominal_bayar = $req->nominal_pembayaran;
        $tgl_bayar = $req->tgl_bayar;

        
        DB::table('spp')->insert([
            'nominal_pembayaran' => $nominal_bayar,
            'tgl_bayar' => $tgl_bayar
        ]);
        return "Data Berhasil Disimpan!";
    }
}
