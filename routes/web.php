<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataKelasController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\pengaturanController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::middleware(['auth', 'auth.session'])->group(function(){
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });

Route::get('/dashboard',[dashboardController::class,'murid'])->middleware('auth');

Route::get('/datamurid',[MuridController::class, 'tampilData'])->middleware('auth');
Route::get('/datamurid', [MuridController::class, 'pencarian'])->middleware('auth');
Route::get('/editmurid/{nis}/{nama_lengkap}/{jenis_kelamin}/{tanggal_lahir}/{alamat}/{nama_orangtua}/{kontak_orangtua}/{tahun_masuk}/{kelas_id}/{status}', [MuridController::class, 'editPage']);
Route::put('/datamurid/{nis}', [MuridController::class, 'editMurid'])->middleware('auth');
Route::delete('/datamurid/{nis}', [MuridController::class, 'hapusMurid']);
Route::get('/tambahMurid',[MuridController::class, 'halamanTambah'])->middleware('auth');
Route::post('/tambahMurid',[MuridController::class, 'tambahMurid'])->middleware('auth');

Route::get('/datakelas',[dataKelasController::class, 'tampilKelas'])->middleware('auth');
Route::get('/datakelas', [dataKelasController::class, 'pencariankelas'])->middleware('auth');
Route::get('/editkelas/{id}/{nama_kelas}/{wali_kelas}',[dataKelasController::class, 'editKelasPage']);
Route::put('/datakelas/{id}/{nama_kelas}/{wali_kelas}', [dataKelasController::class, 'editKelas']);
Route::delete('/datakelas/{id}', [dataKelasController::class, 'hapusKelas']);
Route::get('/tambahkelas', [dataKelasController::class, 'halamanTambahKelas'])->middleware('auth');
Route::post('/tambahkelas', [dataKelasController::class, 'tambahKelas'])->middleware('auth');
// Route::view('/layout', 'layout');

Route::get('/tagihan', [TagihanController::class,'index'])->middleware('auth');
Route::get('/tagihan',[TagihanController::class, 'tampilTagihan'])->middleware('auth');
Route::put('/tagihan/{id}', [TagihanController::class, 'updateStatus'])->middleware('auth');
Route::get('/tagihan', [TagihanController::class, 'search'])->middleware('auth');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/pembayaran', [PembayaranController::class, 'tampilPembayaran'])->middleware('auth');
Route::get('/pembayaran', [PembayaranController::class, 'searchup'])->middleware('auth');

Route::get('/pengaturan', [pengaturanController::class, 'index'])->middleware('auth');
Route::put('/pengaturan/upload', [pengaturanController::class, 'upload'])->middleware('auth');