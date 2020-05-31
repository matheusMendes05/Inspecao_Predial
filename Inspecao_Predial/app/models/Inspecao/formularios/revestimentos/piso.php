<?php

namespace App\models\Inspecao\formularios\revestimentos;

use Illuminate\Database\Eloquent\Model;

class piso extends Model
{
    //

    protected $table = 'pisos';

    protected $fillable = [

        'inspecao_id',

        'estado_piso',

        'local_fissura',
        'foto_fissura',
        'obs_fissura',

        'local_deficiencia_juntas',
        'foto_deficiencia_juntas',
        'obs_deficiencia_juntas',

        'local_destacamento',
        'foto_destacamento',
        'obs_destacamento',

        'local_caimento',
        'foto_caimento',
        'obs_caimento',

        'local_escadas_sem_protecao',
        'foto_escadas_sem_protecao',
        'obs_escadas_sem_protecao',

        'local_manchas',
        'foto_manchas',
        'obs_manchas',

        'local_abatimento',
        'foto_abatimento',
        'obs_abatimanto',

        'local_som',
        'foto_som',
        'obs_som',

        'local_outros',
        'foto_outros',
        'obs_outros'
    ];
}
