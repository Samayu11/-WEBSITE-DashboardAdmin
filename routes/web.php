<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataKelasController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::get('/dashboard',[dashboardController::class,'murid']);

Route::get('/datamurid',[MuridController::class, 'tampilData']);
Route::get('/editmurid/{nis}/{nama_lengkap}/{jenis_kelamin}/{tanggal_lahir}/{alamat}/{nama_orangtua}/{kontak_orangtua}/{tahun_masuk}/{kelas_id}/{status}', [MuridController::class, 'editPage']);
Route::put('/datamurid/{nis}', [MuridController::class, 'editMurid']);
Route::delete('/datamurid/{nis}', [MuridController::class, 'hapusMurid']);
Route::get('/tambahMurid',[MuridController::class, 'halamanTambah']);
Route::post('/tambahMurid',[MuridController::class, 'tambahMurid']);




Route::get('/datakelas',[dataKelasController::class, 'tampilKelas']);
// Route::view('/layout', 'layout');

