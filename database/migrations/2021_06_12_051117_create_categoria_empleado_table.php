<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_empleado', function (Blueprint $table) {
            $table->increments('id_categoria_empleado');

            $table->string('nombre_categoria_empleado', 25);
            $table->string('descripcion_categoria_empleado', 150);
            $table->float('salario_empleado', 8, 2);
            
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
        Schema::dropIfExists('categoria_empleado');
    }
}
