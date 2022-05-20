<?php

namespace App\Providers;
use App\Models\Patient;
use App\Models\CovidVacInfo;
use App\Models\Medication;
use App\Models\MedicationRequest;

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

        //
    }

    public function registerPolicies()
    {
        Gate::define('displayall', function ($user) {
            return $user->role;
        });
    }
}
