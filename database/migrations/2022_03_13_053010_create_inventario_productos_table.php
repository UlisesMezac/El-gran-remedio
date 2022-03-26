<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NoLotes', 10);
            $table->string('Cantidad', 10);
            $table->string('CostoProducto', 10);
            $table->string('CostoMayoreo', 10);
            $table->string('CostoMenudeo', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario_productos');
    }
}
