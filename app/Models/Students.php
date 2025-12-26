<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class students extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'nama_orangtua',
        'kontak_orangtua',
        'tahun_masuk',
        'kelas_id',
        'status'];
}
