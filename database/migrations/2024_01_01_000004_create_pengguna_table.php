<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna');
            $table->string('nama', 255);
            $table->string('asal', 255);
            $table->string('jenis_kelamin', 255);
            $table->string('pekerjaan', 255);
            $table->integer('umur');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pengguna');
    }
};
