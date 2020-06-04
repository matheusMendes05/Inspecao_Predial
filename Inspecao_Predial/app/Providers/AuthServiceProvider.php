<?php

namespace App\Providers;

use App\models\Edificio\edificio;
use App\models\Inspecao\inspecao;
use App\models\Permission;
use App\Policies\Policy\updatePolicy;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\updatePolicy',

        // atualizar edificios
        \App\models\Edificio::class => \App\Policies\updatePolicy::class,
        \App\models\Inspecao::class => \App\Policies\verificarInspecao::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // ver edificios
        $gate->define('verificar-edificio', function (User $user, edificio $edificio) {
            return $user->id == $edificio->usuario_id;
        });


        $gate->define('update-edificio', function (User $user, edificio $edificio) {
            return $user->id == $edificio->usuario_id;
        });

        // historico de inspecao
        $gate->define('historico-inspecao', function (User $user, edificio $edificio) {
            return $user->id == $edificio->usuario_id;
        });

        // permissoes de formularios
        $permissions = Permission::with('roles')->get();

        // foreach ($permissions as $permission) {
        //     $gate->define($permission->name, function (User $user) use ($permission) {
        //         return $user->hasPermission($permission);
        //     });
        // }
    }
}
