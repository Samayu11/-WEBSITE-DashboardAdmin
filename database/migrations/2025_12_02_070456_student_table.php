<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 20)->nullable();
            $table->string('nama_lengkap', 100);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nama_orangtua', 100)->nullable();
            $table->string('kontak_orangtua', 20)->nullable();
            $table->year('tahun_masuk')->nullable();
            $table->foreignId('kelas_id')
                  ->nullable()
                  ->constrained('kelas')
                  ->onUpdate('cascade')
                  ->onDelete('set null'); // FOREIGN KEY
            $table->enum('status', ['aktif', 'lulus', 'keluar'])->default('aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
