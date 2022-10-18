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
            $table->engine = 'InnoDB';
            $table->id();
            // $table->unsignedBigInteger('id_usuario');
            $table->string('nombre',30);
            $table->string('descrip',100);
            $table->string('ubicacion',50);
            $table->integer('telefono')->nullable();
            $table->time('horario_inicio')->default('00:00:00');
            $table->time('horario_cierre')->default('00:00:00');
            $table->string('imagen_url')->default('invalido');

            $table->boolean('activo')->default(1);//TRUE HASTA QUE LO DESACTIVE EL DUEÑO

            // $table->timestamps();
            // $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
            $table->foreignId('usuario_id')->constrained('usuario', 'id');
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
