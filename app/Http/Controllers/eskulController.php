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
}
