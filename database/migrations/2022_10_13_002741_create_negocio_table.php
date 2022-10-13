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
            $table->id('id_Negocio');
            $table->foreignId('id_Usuario');
            $table->string('nombre',16);
            $table->string('descripcion',100);
            $table->string('ubicacion',50);
            $table->string('telefono', 15);
            $table->boolean('activo');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negocio');
    }
};
