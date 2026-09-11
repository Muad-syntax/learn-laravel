<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class eskulController extends Controller
{
    public function eskul(){
        $eskul = DB::table('eskul')->get();
        return view('database.eskul', ['eskul' => $eskul]);
    }
    public function simpan(Request $req){
        $nama = $req->nama;
        $ketua = $req->ketua;

        DB::table('eskul')->insert([
            'nama' => $nama,
            'ketua' => $ketua
        ]);
        return "Data Berhasil Disimpan!";
    }
}
