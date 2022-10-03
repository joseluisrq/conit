<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'email',
        'celular',
        'empresa',
        'pagina',
    ];
}
