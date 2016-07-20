<?php

namespace Litecms\Team\Providers;

use Illuminate\Support\ServiceProvider;

class TeamServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../../../resources/views', 'team');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../../../resources/lang', 'team');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__ . '/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('team', function ($app) {
            return $this->app->make('Litecms\Team\Team');
        });

        // Bind Team to repository
        $this->app->bind(
            \Litecms\Team\Interfaces\TeamRepositoryInterface::class,
            \Litecms\Team\Repositories\Eloquent\TeamRepository::class
        );

        $this->app->register(\Litecms\Team\Providers\AuthServiceProvider::class);
        $this->app->register(\Litecms\Team\Providers\EventServiceProvider::class);
        $this->app->register(\Litecms\Team\Providers\RouteServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['team'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../../../config/config.php' => config_path('package/team.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../../../resources/views' => base_path('resources/views/vendor/team')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../../../resources/lang' => base_path('resources/lang/vendor/team')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__ . '/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__ . '/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');

        // Publish public
        $this->publishes([__DIR__ . '/../../../../public/' => public_path('/')], 'uploads');
    }
}
