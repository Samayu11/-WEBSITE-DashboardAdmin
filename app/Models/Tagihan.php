<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class tagihan extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'tagihan';
    protected $fillable = [
        'student_id',
        'student',
        'tahun',
        'bulan',
        'SPP',
        'Total',
        'status',
        'tanggal_jatuh_tempo',
        'tanggal_bayar'
    ];
}
