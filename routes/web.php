<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataKelasController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\pengaturanController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::get('/dashboard',[dashboardController::class,'murid']);

Route::get('/datamurid',[MuridController::class, 'tampilData']);
Route::get('/datamurid', [MuridController::class, 'pencarian']);
Route::get('/editmurid/{nis}/{nama_lengkap}/{jenis_kelamin}/{tanggal_lahir}/{alamat}/{nama_orangtua}/{kontak_orangtua}/{tahun_masuk}/{kelas_id}/{status}', [MuridController::class, 'editPage']);
Route::put('/datamurid/{nis}', [MuridController::class, 'editMurid']);
Route::delete('/datamurid/{nis}', [MuridController::class, 'hapusMurid']);
Route::get('/tambahMurid',[MuridController::class, 'halamanTambah']);
Route::post('/tambahMurid',[MuridController::class, 'tambahMurid']);

Route::get('/datakelas',[dataKelasController::class, 'tampilKelas']);
Route::get('/datakelas', [dataKelasController::class, 'pencariankelas']);
Route::get('/editkelas/{id}/{nama_kelas}/{wali_kelas}',[dataKelasController::class, 'editKelasPage']);
Route::put('/datakelas/{id}/{nama_kelas}/{wali_kelas}', [dataKelasController::class, 'editKelas']);
Route::delete('/datakelas/{id}', [dataKelasController::class, 'hapusKelas']);
Route::get('/tambahkelas', [dataKelasController::class, 'halamanTambahKelas']);
Route::post('/tambahkelas', [dataKelasController::class, 'tambahKelas']);
// Route::view('/layout', 'layout');

Route::get('/tagihan', [TagihanController::class,'index']);
Route::get('/tagihan',[TagihanController::class, 'tampilTagihan']);
Route::put('/tagihan/{id}', [TagihanController::class, 'updateStatus']);
Route::get('/tagihan', [TagihanController::class, 'search']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran', [PembayaranController::class, 'tampilPembayaran']);
Route::get('/pembayaran', [PembayaranController::class, 'searchup']);

Route::get('/pengaturan', [pengaturanController::class, 'index']);
Route::put('/pengaturan/upload', [pengaturanController::class, 'upload'])->middleware('auth');