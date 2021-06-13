<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicio';
    protected $primarykey = 'id_servicio';

    protected $fillable = ['id_servicio', 'nombre_servicio', 'descripcion_servicio'];
}
