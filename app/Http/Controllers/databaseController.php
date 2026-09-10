<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->where('umur', '>', 1)->get();
        return view('database.database', ['siswa' => $siswa]);
    }
}
