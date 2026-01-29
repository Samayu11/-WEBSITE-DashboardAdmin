<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')
                ->constrained('tagihan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('student_id')
                ->constrained('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('student', 100);
            $table->decimal('total_tagihan', 12, 2);
            $table->decimal('jumlah_bayar', 12, 2); 
            $table->decimal('total', 12, 2)
                ->storedAs('total_tagihan - jumlah_bayar');
            $table->dateTime('tanggal_bayar')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('metode', ['transfer','cash','qris'])->default('cash');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
