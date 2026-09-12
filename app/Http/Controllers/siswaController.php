<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class siswaController extends Controller
{
    public function siswa(){
        $dataSiswa = DB::table('siswa')->get();
        // ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id')
        // ->join('eskul', 'siswa.id_eskul', '=', 'eskul.id')
        // ->select('siswa.nama as nama_siswa','siswa.umur', 'kelas.kelas', 'kelas.jurusan','eskul.nama')
        // ->get();
        return view('database.siswa', [
            'dataSiswa' => $dataSiswa
        ]);
    }
    public function show($id){
        $siswa = DB::table('siswa')->where('id',$id)->first();
        return view('show', compact('siswa'));
    }
    public function simpan(Request $req){
        $validated = $req->validate([
            'nama' => ['required', 'unique:siswa', 'max:255'],
            'umur' => ['required', 'integer']
        ]);
        $nama = $req->nama;
        $umur = $req->umur;

        DB::table('siswa')->insert([
            'nama' => $nama,
            'umur' => $umur
        ]);
        return redirect()->back();
    }
}
