<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        return view('pembayaran');
    }

    public function tampilPembayaran(){
        $pembayarans = DB::table('pembayaran')->get();
        return view('/pembayaran', compact('pembayarans'));
    }

    public function searchup(Request $request){
        $keyword = $request->input('pencarianMurid');
        $pembayarans = DB::table('pembayaran')->where('student', 'like', "%$keyword%")->get();
        return view ('/pembayaran', compact('pembayarans'));
    }
}
