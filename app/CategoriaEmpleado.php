<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaEmpleado extends Model
{
    protected $table = 'categoria_empleado';
    protected $primarykey = 'id_categoria_empleado';

    protected $fillable = ['id_categoria_empleado', 'nombre_categoria_empleado', 'descripcion_categoria_empleado', 'salario_empleado'];
}
