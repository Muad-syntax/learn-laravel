<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class siswaController extends Controller
{
    public function siswa(){
        $dataSiswa = DB::table('siswa')->get();
        return view('database.siswa', [
            'dataSiswa' => $dataSiswa
        ]);
    }
}
