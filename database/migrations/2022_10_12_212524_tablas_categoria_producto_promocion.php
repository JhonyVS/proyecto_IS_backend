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
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('id_Categoria');
            $table->string('nombre',30);
            $table->string('descrip',100)->nullable();
        });
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id_Producto');
            $table->unsignedBigInteger('id_Negocio');
            $table->unsignedBigInteger('categoria');
            $table->string('nombre',30);
            $table->string('descrip',100)->nullable();
            $table->double('precio','15,2');// 15 # antes de la coma y 2 # despues de la coma
            $table->boolean('activo');
            //$table->string('imgURL',230); *******PENDIENTEE******
            //$table->timestamps(); 
            $table->foreign('id_Negocio')->references('id_Negocio')->on('negocio');
            $table->foreign('categoria')->references('id_Categoria')->on('categoria');
        });
        Schema::create('promocion', function (Blueprint $table) {
            $table->bigIncrements('id_Promocion');
            $table->unsignedBigInteger('id_Producto');
            $table->double('descuento','15,2')->nullable();
            $table->date('fechaIni')->nullable();
            $table->date('fechaFin')->nullable();
            $table->boolean('activo');
            //$table->string('imgURL',230); *******PENDIENTEE******
            //$table->timestamps(); 
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
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('producto');
        Schema::dropIfExists('promocion');
    }
};
