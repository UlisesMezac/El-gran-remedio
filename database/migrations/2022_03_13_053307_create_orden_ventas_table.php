<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('Id_Carrito')->nullable();
            $table->unsignedBigInteger('Id_Metodo_Pago')->nullable();
            $table->foreign('Id_Carrito')->references('id')->on('carrito_compras')->onDelete('set null');
            $table->foreign('Id_Metodo_Pago')->references('id')->on('metodo_pagos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_ventas');
    }
}
