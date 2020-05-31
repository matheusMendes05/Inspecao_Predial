<?php

namespace App\models\Inspecao\formularios\revestimentos;

use Illuminate\Database\Eloquent\Model;

class forro extends Model
{
    //
    protected $table = 'forros';

    protected $fillable = [

        'inspecao_id',

        'tipo_revestimento',

        'local_deformacao_excessiva',
        'foto_deformacao_excessiva',
        'obs_deformacao_excessiva',

        'local_fissura',
        'foto_fissura',
        'obs_fissura',

        'local_desencaixe',
        'foto_desencaixe',
        'obs_desencaixe',

        'local_ultilizacao',
        'foto_ultilizacao',
        'obs_ultilizacao',

        'local_deficiencia',
        'foto_deficiencia',
        'obs_deficiencia',

        'local_outros',
        'foto_outros',
        'obs_outros'

    ];
}
