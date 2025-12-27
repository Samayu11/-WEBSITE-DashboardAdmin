<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
         Kelas::create([
            'nama_kelas' => 'TRPL',
            'wali_kelas' => 'Novi'
        ]);

    }
}
