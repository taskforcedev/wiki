<?php namespace Taskforcedev\Wiki;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
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
        $this->config();
        $this->views();
        $this->routes();
    }

    private function config()
    {
        $this->publishes([
            __DIR__.'/config/taskforce-wiki.php' => config_path('taskforce-wiki.php'),
        ], 'taskforce-wiki');

        $this->mergeConfigFrom(
            __DIR__.'/config/taskforce-wiki.php',
            'taskforce-wiki'
        );

        // Merge overridden Config
        $published = __DIR__.'/../../../../config/taskforce-wiki.php';
        if (file_exists($published)) {
            $this->mergeConfigFrom(
                $published,
                'taskforce-wiki'
            );
        }
    }

    private function views()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'taskforce-wiki');
    }

    private function routes()
    {
        require __DIR__ . '/Http/routes.php';
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        return [];
    }
}
