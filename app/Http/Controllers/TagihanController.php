<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(){
        return view('tagihan');
    }

    public function tampilTagihan(){
        $tagihans = DB::table('tagihan')->get();
        return view('/tagihan', compact('tagihans'));
    }

    public function updateStatus(Request $request, $id){
        DB::table('tagihan')->where('id', $id)->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Status di update');
    }

    public function search(Request $request){
        $keyword = $request->input('pencarianMurid');
        $tagihans = DB::table('tagihan')->where('students', 'like', "%$keyword%")->get();
        return view('tagihan', compact('tagihans'));
    }
}
