<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('rakit_komputer', function (Blueprint $table) {
            $table->id('id_rakit');
            $table->unsignedBigInteger('id_komponen_cpu')->nullable();
            $table->unsignedBigInteger('id_komponen_motherboard')->nullable();
            $table->unsignedBigInteger('id_komponen_gpu')->nullable();
            $table->unsignedBigInteger('id_komponen_ram')->nullable();
            $table->unsignedBigInteger('id_komponen_storage')->nullable();
            $table->unsignedBigInteger('id_komponen_psu')->nullable();
            $table->unsignedBigInteger('id_komponen_casing')->nullable();
            $table->unsignedBigInteger('id_komponen_cooler')->nullable();

            $table->foreign('id_komponen_cpu')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_motherboard')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_gpu')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_ram')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_storage')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_psu')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_casing')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('id_komponen_cooler')->references('id_komponen')->on('komponen_komputer')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    public function down(): void {
        Schema::dropIfExists('rakit_komputer');
    }
};
