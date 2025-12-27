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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('student_id')
                  ->constrained('students')
                  ->onUpdate('cascade')
                  ->onDelete('cascade'); // FOREIGN KEY ke students
            $table->year('tahun'); // YEAR NOT NULL
            $table->tinyInteger('bulan')->nullable(); // TINYINT NULL
            $table->decimal('jumlah', 12, 2); // DECIMAL(12,2)
            $table->enum('status', ['belum bayar','lunas','sebagian'])->default('belum bayar');
            $table->date('tanggal_jatuh_tempo');
            $table->date('tanggal_bayar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
