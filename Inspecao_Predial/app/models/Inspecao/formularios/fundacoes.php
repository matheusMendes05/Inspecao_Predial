<?php

namespace App\models\inspecao\formularios;

use Illuminate\Database\Eloquent\Model;

class fundacoes extends Model
{
    //

    protected $table = 'fundacoes';

    protected $fillable = [
        'inspecao_id',

        'local_erosao_solo',
        'foto_erosao_solo',
        'obs_erosao_solo',

        'local_recalque_diferencial',
        'foto_recalque_diferencial',
        'obs_recalque_diferencial',

        'local_outro',
        'foto_outro',
        'obs_outro'

    ];
}
