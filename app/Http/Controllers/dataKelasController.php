<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataKelasController extends Controller
{
    public function tampilKelas(){
        $tampilKelas = DB::table('kelas')->get();
        return view('datakelas', ['tampilKelas' => $tampilKelas]);
    }
}
