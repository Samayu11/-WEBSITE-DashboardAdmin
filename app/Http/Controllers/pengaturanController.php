<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pengaturanController extends Controller
{
    public function index(){
        return view('pengaturan');
    }

    public function upload(Request $request){
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $file = $request->file('foto');
        $ext = $file->getClientOriginalExtension();

        $namaFile = time() . '.' . $ext;

        $file->move(public_path('assets'), $namaFile);

        auth()->user()->update([
            'foto' => $namaFile,
        ]);

        return back()->with('success', 'foto diupload');
    }
}
