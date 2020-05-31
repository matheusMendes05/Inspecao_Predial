<?php

namespace App\models\Teste;

use Illuminate\Database\Eloquent\Model;

class teste extends Model
{
    //

    protected $table = 'testes';

    protected $fillable = [
        'descricao',
        'local',
        'foto',
        'observacao'
    ];
}
