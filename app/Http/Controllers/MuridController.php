<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function tampilData(){
        $tampilMurid = DB::table('students')->get();
        return view('datamurid', ['tampilMurid' => $tampilMurid]);
    }

    public function halamanTambah(){
        return view('tambahMurid');
    }

    public function tambahMurid(Request $request){
        $nis = $request->input('nis');
        $nama_murid = $request->input('nama_murid');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $nama_orangtua = $request->input('nama_orangtua');
        $kontak_orangtua = $request->input('kontak_orangtua');
        $tahun_masuk = $request->input('tahun_masuk');
        $kelas = $request->input('kelas');
        $status = $request->input('status');

        DB::table('students')->insert([
            'nis' => $nis,
            'nama_lengkap' => $nama_murid,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'nama_orangtua' => $nama_orangtua,
            'kontak_orangtua' => $kontak_orangtua,
            'tahun_masuk' => $tahun_masuk,
            'kelas_id' => $kelas,
            'status' => $status,
        ]);

        return redirect('datamurid');
    }

    public function editPage($nis,$nama_lengkap,$jenis_kelamin,$tanggal_lahir,$alamat,$nama_orangtua,$kontak_orangtua,$tahun_masuk,$kelas_id,$status){
        return view('editmurid', compact('nis','nama_lengkap', 'jenis_kelamin','tanggal_lahir','alamat','nama_orangtua', 'kontak_orangtua', 'tahun_masuk', 'kelas_id', 'status'));
    }

    public function editMurid(Request $request, $nis){
        $nama_murid = $request->input('nama_murid');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $nama_orangtua = $request->input('nama_orangtua');
        $kontak_orangtua = $request->input('kontak_orangtua');
        $tahun_masuk = $request->input('tahun_masuk');
        $kelas = $request->input('kelas');
        $status = $request->input('status');

        Students::where('nis', $nis)->update([
            'nama_lengkap' => $nama_murid,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'nama_orangtua' => $nama_orangtua,
            'kontak_orangtua' => $kontak_orangtua,
            'tahun_masuk' => $tahun_masuk,
            'kelas_id' => $kelas,
            'status' => $status,
        ]);

        return redirect('/datamurid')->with('success', 'Data di update');
    }

    public function hapusMurid($nis){
        $hapusMurid = Students::where('nis', $nis)->delete();

        if($hapusMurid === 0){
            return redirect()->back()->with('error','Data tidak ada');
        }


        return redirect()->back()->with('succsess','Berhasi dihapus');
    }
}
