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
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->date('fechaCompra');
            $table->integer('cantidad');


            $table->unsignedBigInteger('idCategorias');
            $table->foreign('idCategorias')->references('id')->on('categorias');

            $table->unsignedBigInteger('idMarcas');
            $table->foreign('idMarcas')->references('id')->on('marcas');
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
