<?php

namespace App\Policies;

use App\models\Edificio\edificio;
use App\models\Inspecao\inspecao;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class verificarInspecao
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function verificarInspecao(edificio $edificio, inspecao $inspecao)
    {
        return $edificio->id == $inspecao->edificio_id;
    }
}
