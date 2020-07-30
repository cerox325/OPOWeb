<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idprovedor')->unsigned();
            $table->foreign('idprovedor')->references('id')->on('provedores');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('id')->on('users');
            $table->string('tipo_comprobante',20);
            $table->string('serie_comprobante',10);
            $table->string('num_comprobante')->nullable();
            $table->dateTime('fecha_hora');
            $table->decimal('impuesto',4,2);
            $table->decimal('total',12,2);
            $table->string('estado',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}
