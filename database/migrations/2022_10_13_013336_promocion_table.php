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
        $table->engine = 'InnoDB';
        $table->id();
        $table->double('descuento','15,2')->nullable();
        $table->date('fecha_ini')->nullable();
        $table->date('fecha_fin')->nullable();
        $table->time('hora_ini')->default('00:00:00')->nullable();
        $table->time('hora_fin')->default('00:00:00')->nullable();
        $table->boolean('activo')->default(1);
        $table->foreignId('producto_id')->constrained('producto', 'id');
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
