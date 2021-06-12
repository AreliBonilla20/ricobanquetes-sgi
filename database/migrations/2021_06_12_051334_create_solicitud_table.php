<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id_solicitud');

            $table->unsignedBigInteger('id_categoria_evento');
            $table->foreign('id_categoria_evento')->references('id_categoria_evento')->on('categoria_evento');

            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');

            $table->string('descripcion_solicitud', 1000);
            $table->date('fecha_solicitud');
            $table->date('fecha_evento');
            $table->string('lugar_evento', 250);
            $table->time('hora_evento');
            $table->integer('cantidad_personas');
            $table->string('estado', 50);

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
        Schema::dropIfExists('solicitud');
    }
}
