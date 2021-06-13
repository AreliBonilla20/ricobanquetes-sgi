<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_servicio', function (Blueprint $table) {
            $table->increments('id_asignacion_servicio');

            $table->integer('id_solicitud')->unsigned()->foreign()->references('id_solicitud')->on('solicitud')->onDelete('cascade');

            $table->integer('id_servicio')->unsigned()->foreign()->references('id_servicio')->on('servicio')->onDelete('cascade');

            $table->float('costo', 8, 2);
            
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
        Schema::dropIfExists('asignacion_servicio');
    }
}
