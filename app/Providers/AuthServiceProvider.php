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

        //MEMBUAT GATE DIMANA PARAMETER PERTAMA ADALAH NAMA GATE-NYA
        //DAN PARAMETER SELANJUTNYA ADALAH CLOSURE FUNCTION
        //DIMANA KITA MELAKUKAN PENGECEKAN, JIKA USER YANG SEDANG LOGIN ROLE BERNILAI TRUE, MAKA DIA AKAN DIIZINKAN
        Gate::define('isManager', function($user) {
            return $user->role == 'Manager';
        });

        Gate::define('isAdmin', function($user) {
            return $user->role == 'Admin';
        });

        Gate::define('isUser', function($user) {
            return $user->role == 'User';
        });        

        Gate::define('isCustomer', function($user) {
            return $user->role == 'Customer';
        });
    }
}
