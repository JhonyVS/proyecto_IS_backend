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
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_Producto');
            $table->string('nombre',30);
            $table->string('descripcion',100)->nullable();
            $table->double('precio','15,2');// 15 # antes de la coma y 2 # despues de la coma
            $table->boolean('activo');
            //$table->string('imgURL',230); *******PENDIENTEE******
            //$table->timestamps(); 
            $table->foreignId('id_Negocio');
            $table->foreignId('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
