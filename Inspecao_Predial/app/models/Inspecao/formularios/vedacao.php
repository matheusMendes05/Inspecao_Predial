<?php

namespace App\models\inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class vedacao extends Model
{
    //
    protected $table = 'vedacaos';

    protected $fillable = [

        '',

        'local_fissura_trinca',
        'foto_fissura_trinca',
        'obs_fissura_trinca',

        'local_eflorescencia',
        'foto_eflorescencia',
        'obs_eflorescencia',

        'local_infiltracao',
        'foto_infiltracao',
        'obs_infiltracao',

        'local_irregularidades_geometricas',
        'foto_irregularidades_geometricas',
        'obs_irregularidades_geometricas',

        'local_outro',
        'foto_outro',
        'obs_outro',

    ];
}
