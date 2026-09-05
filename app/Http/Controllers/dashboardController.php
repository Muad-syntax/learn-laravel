<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $nama = 'Muad';
        $kelas = 'XII';
        $jurusan = 'RPL 2';
        $umur = '18';
        // return view('dashboard.dashboard', [
        //     'nama' => $nama,
        //     'kelas' => $kelas,
        //     'jurusan' => $jurusan,
        //     'umur' => $umur
        // ]);
        return view('dashboard.dashboard', compact(
            'nama',
            'kelas',
            'jurusan',
            'umur'
        ));
    }
}
