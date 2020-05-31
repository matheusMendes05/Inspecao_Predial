<?php

namespace App\models\Inspecao\formularios\revestimentos;

use Illuminate\Database\Eloquent\Model;

class fachada extends Model
{
    //

    protected $table = 'fachadas';

    protected $fillable = [

        'inspecao_id',

        'estado_fachada',

        'local_fissura',
        'foto_fissura',
        'obs_fissura',


        'local_destacamento',
        'foto_destacamento',
        'obs_destacamento',

        'local_descascamento',
        'foto_descascamento',
        'obs_descascamento',

        'local_eflorecencia',
        'foto_eflorecencia',
        'obs_eflorecencia',

        'local_falta_deficiencia',
        'foto_falta_deficiencia',
        'obs_falta_deficiencia',

        'local_falta_pintura',
        'foto_falta_pintura',
        'obs_falta_pintura',

        'local_desgaste',
        'foto_desgaste',
        'obs_desgaste',

        'local_praga',
        'foto_praga',
        'obs_praga',

        'local_vidros',
        'foto_vidros',
        'obs_vidros',

        'local_rompimento',
        'foto_rompimento',
        'obs_rompimento',

        'local_caixa',
        'foto_caixa',
        'obs_caixa',

        'local_outro',
        'foto_outro',
        'obs_outro',


    ];
}
