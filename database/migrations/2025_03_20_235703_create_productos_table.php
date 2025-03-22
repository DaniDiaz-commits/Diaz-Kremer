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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre')->unique();
            $table->string('descripcion', 250)->unique();
            $table->decimal('precio', 10, 2);
            $table->decimal('newPrecio', 10, 2)->nullable();
            $table->integer('stock');
            $table->integer('rating')->default(5);
            $table->unsignedBigInteger('id_familia');
            $table->unsignedBigInteger('id_proveedor');
            $table->longText('img_url')->nullable();
            $table->foreign('id_familia')->references('id')->on('familias')->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
