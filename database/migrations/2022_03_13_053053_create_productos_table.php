<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProducto', 255);
            $table->string('PorcAlcohol', 10);
            $table->string('Presentacion', 10);
            $table->string('Imagen', 255);
            $table->string('Descripcion', 500);
            $table->string('CodigoBarras', 255)->nullable();
            $table->unsignedBigInteger('Id_Categorias')->nullable();
            $table->unsignedBigInteger('Id_altas_producto')->nullable();
            $table->timestamps();
            $table->foreign('Id_Categorias')->references('id')->on('categorias')->onDelete('set null');
            $table->foreign('Id_altas_producto')->references('id')->on('inventario_productos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
