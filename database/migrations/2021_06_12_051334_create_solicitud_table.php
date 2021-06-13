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

            $table->integer('id_categoria_evento')->unsigned()->foreign()->references('id_categoria_evento')->on('categoria_evento')->onDelete('cascade');

            $table->integer('id_cliente')->unsigned()->foreign()->references('id_cliente')->on('cliente')->onDelete('cascade');

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
