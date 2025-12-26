<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pembayaran extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable = [
        'tagihan_id',
        'student_id',
        'jumlah_bayar',
        'tanggal_bayar',
        'metode'];
}
