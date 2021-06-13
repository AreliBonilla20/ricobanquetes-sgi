<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaEvento extends Model
{
    protected $table = 'categoria_evento';
    protected $primarykey = 'id_categoria_evento';

    protected $fillable = ['id_categoria_evento', 'nombre_categoria_evento', 'descripcion_categoria_evento'];
}
