<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('komponen_komputer', function (Blueprint $table) {
            $table->id('id_komponen');
            $table->string('nama_komponen', 255);
            $table->string('brand_komponen', 255);
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->string('soket_komponen', 255)->nullable();
            $table->integer('harga_komponen')->nullable();
            $table->integer('performa_komponen')->nullable();
            $table->integer('daya_komponen')->nullable();
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('komponen_komputer');
    }
};
