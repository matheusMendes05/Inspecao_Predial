<?php

namespace App\models\Inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class instalacaoGas extends Model
{
    //

    protected $table = 'instalacao_gases';

    protected $fillable = [

        'inspecao_id',

        'local_vazamentos',
        'foto_vazamentos',
        'obs_vazamentos',

        'local_deterioracao',
        'foto_deterioracao',
        'obs_deterioracao',

        'local_nConformidadeP',
        'foto_nConformidadeP',
        'obs_nConformidadeP',

        'local_nConformidadeD',
        'foto_nConformidadeD',
        'obs_nConformidadeD',

        'local_fAbertura',
        'foto_fAbertura',
        'obs_fAbertura',

        'local_abertura',
        'foto_abertura',
        'obs_abertura',

        'local_faltaS',
        'foto_faltaS',
        'obs_faltaS',

        'local_outro',
        'foto_outro',
        'obs_outro',
    ];
}
