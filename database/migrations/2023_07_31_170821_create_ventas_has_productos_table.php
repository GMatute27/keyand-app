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
        Schema::create('ventas_has_productos', function (Blueprint $table) {
            $table->id('idvp');
            $table->unsignedBigInteger('id_ventas');
            $table->foreign('id_ventas')->references('idv')->on('ventas');
            $table->unsignedBigInteger('id_productos');
            $table->foreign('id_productos')->references('idp')->on('productos');
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
        Schema::dropIfExists('ventas_has_productos');
    }
};
