<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionEmpleado extends Model
{
    protected $table = 'asignacion_empleado';
    protected $primarykey = 'id_asignacion_empleado';

    protected $fillable = ['id_asignacion_empleado', 'id_empleado', 'id_solicitud'];
}
