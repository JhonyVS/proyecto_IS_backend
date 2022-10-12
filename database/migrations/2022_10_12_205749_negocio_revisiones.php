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
        Schema::create('negocio', function (Blueprint $table) {
            $table->bigIncrements('id_Negocio');
            $table->unsignedBigInteger('id_Usuario');
            $table->string('nombre',16);
            $table->string('descrip',100);
            $table->string('ubicacion',50);
            $table->unsignedBigInteger('telefono');
            $table->boolean('activo');
            //$table->timestamps(); 
            $table->foreign('id_Usuario')->references('id_Usuario')->on('Usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
