<?php

namespace App\Providers;
// use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use PhpParser\Node\Stmt\ElseIf_;

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
     *
     * @return void
     */
    public function boot()
    {
    $this->registerPolicies();
//Mengatur Hak Akses untuk noc
    Gate::define('noc-only', function ($user) {
    if ($user->level == 'noc'){
    return true;
    }
    return false;
    });
//Mengatur Hak Akses untuk cs
    Gate::define('cs-only', function ($user) {
    if ($user->level == 'cs'){
    return true;
    }
    return false;
    });
//Mengatur Hak Akses untuk pelanggan
    Gate::define('pelanggan-only', function ($user) {
    if ($user->level == 'pelanggan'){
    return true;
    }
    return false;
    });

    //Mengatur Hak Akses untuk pelanggan
    Gate::define('marketing-only', function ($user) {
    if ($user->level == 'marketing'){
    return true;
    }
    return false;
    });

    Gate::define('noc-marketing-pelanggan', function ($user) {
    if ($user->level == 'marketing'){
    return true;
    }
    elseif ($user->level == 'noc'){
    return true;
    }
    elseif ($user->level == 'pelanggan'){
    return true;
    }
    return false;
    });

    Gate::define('cs-pelanggan', function ($user) {
    if ($user->level == 'cs'){
    return true;
    }
    elseif ($user->level == 'pelanggan'){
    return true;
    }
    return false;
    });
    }
}
