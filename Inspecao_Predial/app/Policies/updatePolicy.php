<?php

namespace App\Policies;

use App\models\Edificio\edificio;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class updatePolicy
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

    public function updateEdificio(User $user, edificio $edificio)
    {
        return $user->id == $edificio->usuario_id;
    }
}
