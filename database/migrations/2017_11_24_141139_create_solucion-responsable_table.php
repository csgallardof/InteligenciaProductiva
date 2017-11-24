<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolucionResponsableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion_responsable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('solucion_id');
            $table->integer('tipo_responsable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solucion_responsable');
    }
}
