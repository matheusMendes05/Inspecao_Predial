<?php

namespace App\models\Inspecao;

use Illuminate\Database\Eloquent\Model;

class inspecao extends Model
{
    //
    protected $table = 'inspecaos';

    protected $fillable = [
        'edificio_id',
        'responsavel_acompanhamento_obra',
    ];
}
