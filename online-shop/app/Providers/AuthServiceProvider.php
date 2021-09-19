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

        Gate::define('admin-only', function (User $user) {
        return $user->id = 1;
        });

        Gate::define('seller-only', function (User $user) {
            return $user->role == 'seller';
        });

        Gate::define('buyer-only', function (User $user) {
            return $user->role == 'buyer';
        });

        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id == $post->user_id;
        });

    }
}
