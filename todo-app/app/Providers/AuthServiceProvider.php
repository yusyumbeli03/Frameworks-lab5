<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
//        $this->registerPolicies();
//
//        Gate::define('view-dashboard', function ($user, $profileUserId) {
//            // Администратор может просматривать любые профили
//            if ($user->isAdmin()) {
//                return true;
//            }
//
//            // Пользователь может просматривать только свой профиль
//            return $user->id === (int) $profileUserId;
//        });
    }
}
