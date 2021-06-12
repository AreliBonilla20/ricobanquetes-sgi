<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id_empleado');

            $table->unsignedBigInteger('id_categoria_empleado');
            $table->foreign('id_categoria_empleado')->references('id_categoria_empleado')->on('categoria_empleado');
            
            $table->string('nombres_empleado', 150);
            $table->string('apellidos_empleado', 150);
            $table->string('dui_empleado', 10);
            $table->string('telefono_empleado', 10);
            $table->string('direccion_empleado', 250);
            $table->string('correo_empleado', 150);
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
        Schema::dropIfExists('empleado');
    }
}
