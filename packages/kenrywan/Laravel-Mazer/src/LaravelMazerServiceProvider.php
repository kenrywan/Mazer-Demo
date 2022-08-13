<?php

namespace Kenrywan\LaravelMazer;

use Illuminate\Support\ServiceProvider;

class LaravelMazerServiceProvider extends ServiceProvider
{
    /**
     * The prefix to use for register/load the package resources.
     *
     * @var string
     */
    protected $pkgPrefix = 'mazer';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViews();
        $this->loadRoutes();
    }

    /**
     * Load the package views.
     *
     * @return void
     */
    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');
        $this->loadViewsFrom($viewsPath, $this->pkgPrefix);
    }

    /**
     * Get the absolute path to some package resource.
     *
     * @param  string  $path  The relative path to the resource
     * @return string
     */
    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }

    /**
     * Load the package web routes.
     *
     * @return void
     */
    private function loadRoutes()
    {
        $routesPath = $this->packagePath('routes/web.php');
        $this->loadRoutesFrom($routesPath);
    }
}
