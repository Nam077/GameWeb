<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        Gate::define('category-list','App\Policies\CategoryPolicy@view');
        Gate::define('category-create','App\Policies\CategoryPolicy@create');
        Gate::define('category-edit','App\Policies\CategoryPolicy@update');
        Gate::define('category-delete','App\Policies\CategoryPolicy@delete');

        Gate::define('menu-list','App\Policies\MenuPolicy@view');
        Gate::define('menu-create','App\Policies\MenuPolicy@create');
        Gate::define('menu-edit','App\Policies\MenuPolicy@update');
        Gate::define('menu-delete','App\Policies\MenuPolicy@delete');

        Gate::define('game-list','App\Policies\GamePolicy@view');
        Gate::define('game-create','App\Policies\GamePolicy@create');
        Gate::define('game-edit','App\Policies\GamePolicy@update');
        Gate::define('game-delete','App\Policies\GamePolicy@delete');

        Gate::define('user-list','App\Policies\UserPolicy@view');
        Gate::define('user-create','App\Policies\UserPolicy@create');
        Gate::define('user-edit','App\Policies\UserPolicy@update');
        Gate::define('user-delete','App\Policies\UserPolicy@delete');

        Gate::define('slider-list','App\Policies\SliderPolicy@view');
        Gate::define('slider-create','App\Policies\SliderPolicy@create');
        Gate::define('slider-edit','App\Policies\SliderPolicy@update');
        Gate::define('slider-delete','App\Policies\SliderPolicy@delete');

        Gate::define('role-list','App\Policies\RolePolicy@view');
        Gate::define('role-create','App\Policies\RolePolicy@create');
        Gate::define('role-edit','App\Policies\RolePolicy@update');
        Gate::define('role-delete','App\Policies\RolePolicy@delete');

        Gate::define('contact-list','App\Policies\ContactPolicy@view');
        Gate::define('contact-create','App\Policies\ContactPolicy@create');
        Gate::define('contact-edit','App\Policies\ContactPolicy@update');
        Gate::define('contact-delete','App\Policies\ContactPolicy@delete');

        Gate::define('permission-list', 'App\Policies\PermissionPolicy@view');
        Gate::define('permission-create', 'App\Policies\PermissionPolicy@create');
        Gate::define('permission-edit', 'App\Policies\PermissionPolicy@update');
        Gate::define('permission-delete', 'App\Policies\PermissionPolicy@delete');


    }
}
