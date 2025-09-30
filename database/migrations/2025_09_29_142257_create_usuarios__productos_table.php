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
        Schema::create('usuarios__productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUsuarios');
            $table->foreign('idUsuarios')->references('id')->on('usuarios');
            $table->unsignedBigInteger('idProductos');
            $table->foreign('idProductos')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios__productos');
    }
};
