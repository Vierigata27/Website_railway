<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('sistem_rekomendasi', function (Blueprint $table) {
            $table->id('id_rekomendasi');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_rakit');
            $table->integer('total_performa');
            $table->integer('total_buget');
            $table->string('kategori', 50);
            $table->timestamp('tanggal_rakit')->useCurrent();

            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_rakit')->references('id_rakit')->on('rakit_komputer')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists('sistem_rekomendasi');
    }
};
