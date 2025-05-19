<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('admin');
    }
};
