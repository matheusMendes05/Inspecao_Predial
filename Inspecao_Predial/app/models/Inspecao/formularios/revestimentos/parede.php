<?php

namespace App\models\Inspecao\formularios\revestimentos;

use Illuminate\Database\Eloquent\Model;

class parede extends Model
{
    //

    protected $table = 'paredes';

    protected $fillable = [

        'inspecao_id',

        'estado_parede',

        'local_fissura',
        'foto_fissura',
        'obs_fissura',

        'local_destacamento',
        'foto_destacamento',
        'obs_destacamento',

        'local_infiltracao',
        'foto_infiltracao',
        'obs_infiltracao',

        'local_eflorecencia',
        'foto_eflorecencia',
        'obs_eflorecencia',

        'local_deficiencia',
        'foto_deficiencia',
        'obs_deficiencia',

        'local_bolhas',
        'foto_bolhas',
        'obs_bolhas',

        'local_falha',
        'foto_falha',
        'obs_falha',

        'local_abertura',
        'foto_abertura',
        'obs_abertura',

        'local_som',
        'foto_som',
        'obs_som',

        'local_outro',
        'foto_outro',
        'obs_outro'
    ];
}
