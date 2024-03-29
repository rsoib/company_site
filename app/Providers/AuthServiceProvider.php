<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('VIEW_ADMIN', function($user){

            return $user->canDo('VIEW_ADMIN',TRUE);

        });

        Gate::define('VIEW_ADMIN_SKILL', function($user){

            return $user->canDo('VIEW_ADMIN_SKILL',TRUE);

        });

        Gate::define('VIEW_ADMIN_MENU', function($user){

            return $user->canDo('VIEW_ADMIN_MENU',TRUE);

        });

        Gate::define('VIEW_ADMIN_SERVICE', function($user){

            return $user->canDo('VIEW_ADMIN_SERVICE',TRUE);

        });



        //
    }
}
