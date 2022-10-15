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
        Schema::create('promocion', function (Blueprint $table) {
            $table->bigIncrements('id_Promocion');
            $table->unsignedBigInteger('id_Producto');
            $table->double('descuento','15,2')->nullable();
            $table->date('fechaIni')->nullable();
            $table->date('fechaFin')->nullable();
            $table->time('horarioIni')->default('00:00:00')->nullable();
            $table->time('horarioFin')->default('00:00:00')->nullable();
            $table->string('ubicacion',50)->nullable();

            $table->boolean('activo')->default(1);
            //$table->string('imgURL',230); *******PENDIENTEE******
            $table->timestamps(); 
            $table->foreign('id_Producto')->references('id_Producto')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocion');
    }
};
