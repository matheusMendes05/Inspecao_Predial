<?php

namespace App\models\Inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class impermeabilizacao extends Model
{
    //
    protected $table = 'impermeabilizacaos';

    protected $fillable = [

        'inspecao_id',

        'local_infiltracao',
        'foto_infiltracao',
        'obs_infiltracao',

        'local_deslocamento',
        'foto_deslocamento',
        'obs_deslocamento',

        'local_sistema',
        'foto_sistema',
        'obs_sistema',

        'local_ressecamento',
        'foto_ressecamento',
        'obs_ressecamento',


        'local_falta_junta',
        'foto_falta_junta',
        'obs_falta_junta',


        'local_falta_caimento',
        'foto_falta_caimento',
        'obs_falta_caimento',


        'local_falta_imper',
        'foto_falta_imper',
        'obs_falta_imper',


        'local_outro',
        'foto_outro',
        'obs_outro',


    ];
}
