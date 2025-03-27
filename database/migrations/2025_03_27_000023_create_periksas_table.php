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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasien')->on('users')->onDelete('cascade');
            $table->foreignId('id_dokter')->constrained('dokter')->on('users')->onDelete('cascade');
            $table->dateTime('tgl_periksa');
            $table->text('catatan');
            $table->integer('biaya_periksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksas');
    }
};
