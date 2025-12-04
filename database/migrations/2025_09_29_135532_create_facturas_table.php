<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();

            $table->string('numeroFactura')->unique();
            $table->date('fechaEmision');

           
           $table->unsignedBigInteger('idUsuarios');
           $table->foreign('idUsuarios')->references('id')->on('usuarios')->onDelete('cascade');


            $table->string('direccionCliente');
            $table->string('metodoPago');    
            $table->string('estadoPago');     

            $table->decimal('montoTotal', 12, 2);
            $table->text('notas')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};