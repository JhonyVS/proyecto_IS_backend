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
        $table->engine = 'InnoDB';
        $table->id('producto_id');
        // $table->unsignedBigInteger('id_negocio');
        // $table->unsignedBigInteger('id_categoria');
        $table->string('nombre',30);
        $table->string('descrip',100)->nullable();
        $table->double('precio','15,2');// 15 # antes de la coma y 2 # despues de la coma
        $table->boolean('activo')->default(1);
        $table->string('imagen_url')->default('invalido');;
        //$table->string('imgURL',230); *******PENDIENTEE******
        // $table->timestamps(); 
        $table->foreignId('categoria_id')->constrained('categoria', 'categoria_id');
        $table->foreignId('negocio_id')->constrained('negocio', 'negocio_id');
        // $table->foreign('id_negocio')->references('id_negocio')->on('negocio');
        // $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
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
