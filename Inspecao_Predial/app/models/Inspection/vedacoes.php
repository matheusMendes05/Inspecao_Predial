<?php

namespace App\models\Inspection;

use Illuminate\Database\Eloquent\Model;

class vedacoes extends Model
{
    //
    protected $table = 'vedacoes';

    protected $fillable = [

        'inspecao_id',

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
