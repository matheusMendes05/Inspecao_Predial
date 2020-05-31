<?php

namespace App\models\Inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class instalacaoHidro extends Model
{
    //

    protected $table = 'instalacao_hidros';

    protected $fillable = [

        'inspecao_id',

        'local_vazamento',
        'foto_vazamento',
        'obs_vazamento',

        'local_deterioracao',
        'foto_deterioracao',
        'obs_deterioracao',

        'local_tampas',
        'foto_tampas',
        'obs_tampas',

        'local_nConformidade',
        'foto_nConformidade',
        'obs_nConformidade',

        'local_faltaIdent',
        'foto_faltaIdent',
        'obs_faltaIdent',

        'local_tubulacoes',
        'foto_tubulacoes',
        'obs_tubulacoes',

        'local_entupimento',
        'foto_entupimento',
        'obs_entupimento',

        'local_outro',
        'foto_outro',
        'obs_outro',


    ];
}
