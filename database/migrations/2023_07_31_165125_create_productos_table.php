<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idp');
            $table->string('Nombre');
            $table->float('precio');
            $table->string('color');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_categorias');
            $table->foreign('id_categorias')->references('idc')->on('categorias');
            $table->string('imagen');
            $table->integer('codproducto');
            $table->string('tallas');
            $table->integer('estatus')->default('1');
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
        Schema::dropIfExists('productos');
    }
};
