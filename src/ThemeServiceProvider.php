<?php

namespace FirstArriving\NovaTheme;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::theme(asset('/first-arriving/nova-theme/theme.css'));

        $this->publishes([
            __DIR__.'/../resources/css' => public_path('first-arriving/nova-theme'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/nova'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
