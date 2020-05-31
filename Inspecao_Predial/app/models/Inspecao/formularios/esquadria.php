<?php

namespace App\models\Inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class esquadria extends Model
{
    //
    protected $table = 'esquadrias';

    protected $fillable = [

        'inspecao_id',

        'estado_esquadria',

        'local_deficiencia_pintura',
        'foto_deficiencia_pintura',
        'obs_deficiencia_pintura',

        'local_pragas',
        'foto_pragas',
        'obs_pragas',

        'local_perda_mobilidade',
        'foto_perda_mobilidade',
        'obs_perda_mobilidade',

        'local_folga',
        'foto_folga',
        'obs_folga',

        'local_rompimento',
        'foto_rompimento',
        'obs_rompimento',

        'local_componentes',
        'foto_componentes',
        'obs_componentes',

        'local_outro',
        'foto_outro',
        'obs_outro',
    ];
}
