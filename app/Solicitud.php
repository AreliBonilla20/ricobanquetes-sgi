<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud';
    protected $primarykey = 'id_solicitud';

    protected $fillable = ['id_solicitud', 'id_categoria_evento', 'id_cliente', 'descripcion_solicitud', 'fecha_solicitud', 'fecha_evento', 
                            'lugar_evento', 'hora_evento', 'cantidad_personas', 'estado'];
}
