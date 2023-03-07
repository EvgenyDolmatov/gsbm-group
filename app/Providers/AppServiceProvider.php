<?php

namespace App\Providers;

use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.components.header', function ($view) {
            $view->with([
                'services' => Service::all()->sortBy('priority'),
                "accessRoles" => Role::whereIn("name", ["admin", "super-admin", "leader"])->get(),
            ]);
        });
    }
}
