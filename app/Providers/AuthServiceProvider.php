<?php

namespace App\Providers;

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
        'App\Models\Room' => 'App\Policies\RoomPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('create-room','App\Policies\RoomPolicy@create');
        Gate::define('view-rooms','App\Policies\RoomPolicy@view');
        Gate::define('edit-rooms','App\Policies\RoomPolicy@update');
        Gate::define('admin',function($user){
            return $user->role == 'admin';
        });
    }
}
