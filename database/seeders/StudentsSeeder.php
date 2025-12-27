<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    public function run(): void
    {
        Students::create([
            'nis' => '312400002',
            'nama_lengkap' => 'James Bond',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2002-12-01',
            'alamat' => 'Jakarta',
            'nama_orangtua' => 'Dwyne bond',
            'kontak_orangtua' => '081234567890',
            'tahun_masuk' => '2024',
            'kelas_id' => '1',
            'status' => 'aktif'
        ]);
    }
}
