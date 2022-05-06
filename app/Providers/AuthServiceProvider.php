<?php

namespace App\Providers;

use App\Models\Avatar;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->role->role == 'admin';
        });

        Gate::define('test', function ($user, $item) {
            return  $item->role->role != 'admin' && $user->role->role == 'admin' ;
        });

        Gate::define('avatar', function ($user, $avatars) {
            $avatars = Avatar::all();
            return $avatars->count() < 5;
        });

    }
}
