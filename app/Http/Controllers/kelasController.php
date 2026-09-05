<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function kelas(){
        return view('kelas.kelas');
    }
}
