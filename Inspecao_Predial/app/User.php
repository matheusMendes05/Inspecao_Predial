<?php

namespace App;

use App\models\Permission;
use App\models\Roles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'profissional_tittle',
        'card_n',
        'national_registry',
        'email',
        'situation',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class);
    }

    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles());

        // dd($permission->roles());
    }

    public function hasAnyRoles($roles)
    {

        if (is_array($roles) || is_object($roles)) {
            foreach ($roles as $role) {
                // return $this->hasAnyRoles($role);
                // $this->roles->contains('name', $roles->name);
                dd($this->roles);
            }
        }

        return $this->roles->contains('name', $roles);
    }
}
