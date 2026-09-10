<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class sppController extends Controller
{
    public function spp(){
        $spp = DB::table('spp')->get();
        return view('database.spp', ['spp' => $spp]);
    }
}
