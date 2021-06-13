<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionServicio extends Model
{
    protected $table = 'asignacion_servicio';
    protected $primarykey = 'id_asignacion_servicio';

    protected $fillable = ['id_asignacion_servicio', 'id_solicitud', 'id_servicio', 'costo'];
}
