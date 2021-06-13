<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primarykey = 'id_cliente';

    protected $fillable = ['id_cliente', 'nombres_cliente', 'apellidos_cliente', 'telefono_cliente', 'direccion_cliente', 'correo_cliente'];
}
