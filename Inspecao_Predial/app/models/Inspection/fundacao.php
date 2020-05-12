<?php

namespace App\models\Inspection;

use Illuminate\Database\Eloquent\Model;

class fundacao extends Model
{
    //
    protected $table = 'fundacaos';

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
