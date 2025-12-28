<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class dataKelasController extends Controller
{
    public function tampilKelas(){
        $tampilKelas = DB::table('kelas')->get();
        return view('datakelas', ['tampilKelas' => $tampilKelas]);
    }

    public function pencariankelas(Request $request){
        $katakunci = $request->input('pencariankelas');
        $tampilKelas = DB::table('kelas')->where('nama_kelas', 'like', "%$katakunci%")->orWhere('wali_kelas', 'like', "%$katakunci%")->get();
        return view('datakelas', compact('tampilKelas'));
    }

    public function halamanTambahKelas(){
        return view('tambahKelas');
    }

    public function tambahKelas(Request $request){
        $kelas_id = $request->input('kelas_id');
        $nama_kelas = $request->input('nama_kelas');
        $wali_kelas = $request->input('wali_kelas');

        DB::table('kelas')->insert([
            'id' => $kelas_id,
            'nama_kelas' => $nama_kelas,
            'wali_kelas' => $wali_kelas
        ]);

        return redirect('datakelas');
    }

    public function editKelasPage($id, $nama_kelas, $wali_kelas){
        return view('/editkelas', compact('id','nama_kelas', 'wali_kelas'));
    }

    public function editKelas( Request $request, $id){
        $nama_kelas = $request->input('nama_kelas');
        $wali_kelas = $request->input('wali_kelas');
        
        Kelas::where('id', $id)->update([
            'nama_kelas' => $nama_kelas,
            'wali_kelas' => $wali_kelas,
        ]);

        return redirect('/datakelas')->with('success', 'Data di update');
    }

    public function hapusKelas($id){
        $hapusKelas = Kelas::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Data dihapus');
    }
}
