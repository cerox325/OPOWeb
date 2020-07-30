<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcategoria')->unsigned();
            $table->string('codigo',250)->nullable();
            $table->string('nombre',250)->unique();
            $table->decimal('precio_venta',11,2);
            $table->integer('stock');
            $table->string('descripcion',256)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();

            $table->string('modeloAuto',256)->nullable();
            $table->string('clave',256)->nullable();
            $table->string('marcaProducto',256)->nullable();
            $table->string('marcaAuto',256)->nullable();
            $table->string('seccion',256)->nullable();
            $table->integer('stockMinimo')->nullable();
            $table->integer('stockMaximo')->nullable();

            $table->foreign('idcategoria')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
