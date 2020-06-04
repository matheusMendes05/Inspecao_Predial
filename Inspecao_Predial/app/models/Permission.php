<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //

    // relacionameto com permissoes
    public function roles()
    {
        return $this->belongsToMany(Roles::class);
    }
}
