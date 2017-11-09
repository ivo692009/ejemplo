<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Piezas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piezas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registro');
            $table->text('codigo');
            $table->integer('tipo_id');
            $table->text('titulo');
            $table->text('autor');
            $table->text('estilo');
            $table->text('material');
            $table->text('epoca');
            $table->date('fecha');
            $table->integer('estado_id');
            $table->text('procedencia');
            $table->text('ubicacion');
            $table->text('fotografo');
            $table->text('descripcion');
            $table->text('observaciones');
            $table->integer('descriptores_id');
            $table->text('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piezas');
    }
}
