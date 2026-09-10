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
}
