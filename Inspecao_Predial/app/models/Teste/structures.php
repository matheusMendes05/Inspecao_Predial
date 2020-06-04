<?php

namespace App\models\Teste;

use Illuminate\Database\Eloquent\Model;

class structures extends Model
{
    //
    protected $fillable = [
        'inspecao_id',

        'sistema_edificio',
        'elemento_formulario',
        'local',
        'foto',
        'obs'
    ];
}
