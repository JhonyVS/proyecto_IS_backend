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
            $table->id('id_Promocion');
            $table->foreignId('id_Producto');
            $table->double('descuento','15,2')->nullable();
            $table->date('fechaIni')->nullable();
            $table->date('fechaFin')->nullable();
            $table->boolean('activo');
            //$table->string('imgURL',230); *******PENDIENTEE******
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
        Schema::dropIfExists('promocion');
    }
};
