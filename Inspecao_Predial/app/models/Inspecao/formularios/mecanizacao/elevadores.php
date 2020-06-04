<?php

namespace App\models\Inspecao\formularios\mecanizacao;

use Illuminate\Database\Eloquent\Model;

class elevadores extends Model
{
    //
    protected $table = 'elevadores';

    protected $fillable = [
        'inspecao_id',

        'local_cabinaD',
        'foto_cabinaD',
        'obs_cabinaD',

        'local_quebraB',
        'foto_quebraB',
        'obs_quebraB',

        'local_porta',
        'foto_porta',
        'obs_porta',

        'local_falhaF',
        'foto_falhaF',
        'obs_falhaF',

        'local_movimentoE',
        'foto_movimentoE',
        'obs_movimentoE',

        'local_desnivel',
        'foto_desnivel',
        'obs_desnivel',

        'local_pocoE',
        'foto_pocoE',
        'obs_pocoE',

        'local_vazamentoO',
        'foto_vazamentoO',
        'obs_vazamentoO',

        'local_outro',
        'foto_outro',
        'obs_outro',

    ];
}
