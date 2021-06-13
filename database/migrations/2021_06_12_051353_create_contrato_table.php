<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id_contrato');

            $table->integer('id_solicitud')->unsigned()->foreign()->references('id_solicitud')->on('solicitud')->onDelete('cascade');

            $table->float('costo_empleado', 8, 2);
            $table->float('costo_servicios', 8, 2);
            $table->float('costo_total', 8, 2);
            $table->float('ingreso_total', 8, 2);
            
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
        Schema::dropIfExists('contrato');
    }
}
