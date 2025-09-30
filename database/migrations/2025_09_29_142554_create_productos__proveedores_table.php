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
        Schema::create('productos__proveedores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProductos');
            $table->foreign('idProductos')->references('id')->on('productos');
            $table->unsignedBigInteger('idProveedores');
            $table->foreign('idProveedores')->references('id')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos__proveedores');
    }
};
