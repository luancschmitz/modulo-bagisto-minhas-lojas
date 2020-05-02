<?php
namespace LuanCS\MinhasLojas\Providers;

use Illuminate\Support\ServiceProvider;

class MinhasLojasServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Services
     */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'minhaslojas');

    }

    /**
     * Register Services
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/Config/menu-admin.php', 'menu.admin');
    }
}