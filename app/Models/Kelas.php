<?php

namespace App\Models;   

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelas extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'wali_kelas'];
}
