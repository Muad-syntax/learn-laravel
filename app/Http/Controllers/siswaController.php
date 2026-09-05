<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function siswa(){
        $dataSiswa = ['azzamah', 'asyifa', 'aurel', 'muad', 'zein', 'farel', 'baskoro'];
        return view('siswa.siswa', [
            'dataSiswa' => $dataSiswa
        ]);
    }
}
