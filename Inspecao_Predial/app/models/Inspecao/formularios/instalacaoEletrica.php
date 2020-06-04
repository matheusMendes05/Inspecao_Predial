<?php

namespace App\models\Inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class instalacaoEletrica extends Model
{
    //
    protected $table = 'instalacao_eletricas';

    protected $fillable = [
        'inspecao_id',

        'local_LampadaQ',
        'foto_LampadaQ',
        'obs_LampadaQ',

        'local_ataqueP',
        'foto_ataqueP',
        'obs_ataqueP',

        'local_modificacaoE',
        'foto_modificacaoE',
        'obs_modificacaoE',

        'local_superaquecimento',
        'foto_superaquecimento',
        'obs_superaquecimento',

        'local_flacoes',
        'foto_flacoes',
        'obs_flacoes',

        'local_curtoC',
        'foto_curtoC',
        'obs_curtoC',

        'local_quadroL',
        'foto_quadroL',
        'obs_quadroL',

        'local_ausenciaP',
        'foto_ausenciaP',
        'obs_ausenciaP',

        'local_falhaT',
        'foto_falhaT',
        'obs_falhaT',

        'local_cercaE',
        'foto_cercaE',
        'obs_cercaE',

        'local_outros',
        'foto_outros',
        'obs_outros',


    ];
}
