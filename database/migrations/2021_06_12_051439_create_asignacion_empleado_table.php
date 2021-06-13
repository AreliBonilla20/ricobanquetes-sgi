<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_empleado', function (Blueprint $table) {
            $table->increments('id_asignacion_empleado');

            $table->integer('id_solicitud')->unsigned()->foreign()->references('id_solicitud')->on('solicitud')->onDelete('cascade');
            
            $table->integer('id_empleado')->unsigned()->foreign()->references('id_empleado')->on('empleado')->onDelete('cascade');
            
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
        Schema::dropIfExists('asignacion_empleado');
    }
}
