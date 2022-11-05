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
        $table->id();
        $table->string('nombre',30);
        $table->string('descrip',100)->nullable();
        $table->double('precio','15,2');
        $table->boolean('activo')->default(1);
        $table->string('imagen');
        $table->string('categoria');
        $table->foreign('categoria')->references('categoria')->on('categoria');
        $table->foreignId('negocio_id')->constrained('negocio', 'id');
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
