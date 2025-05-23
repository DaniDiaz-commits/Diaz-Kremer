<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->text('contenido');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('comentarios');
    }
};
