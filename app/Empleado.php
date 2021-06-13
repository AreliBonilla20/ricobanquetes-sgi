<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $primarykey = 'id_empleado';

    protected $fillable = ['id_empleado', 'id_categoria_empleado', 'nombres_empleado', 'apellidos_empleado', 'dui_empleado', 'telefono_empleado',
                            'direccion_empleado', 'correo_empleado'];
}
