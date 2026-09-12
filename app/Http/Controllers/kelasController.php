<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kelasController extends Controller
{
    public function kelas(){
        $kelas = DB::table('kelas')->get();
        return view('database.kelas', ['kelas' => $kelas]);
    }
    public function simpan(Request $req){
        $validated = $req->validate([
            'kelas' => ['required'],
            'jurusan' => ['required']
        ]);
        $kelas = $req->kelas;
        $jurusan = $req->jurusan;

        DB::table('kelas')->insert([
            'kelas' => $kelas,
            'jurusan' => $jurusan
        ]);
        return "Data Berhasil Disimpan!";
    }
}
