<?php

namespace Ayarigab\Pla;

use Illuminate\Support\ServiceProvider;
use Ayarigab\Pla\commands\PLAPublish;

class PLAServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('pla:publish', function ($app) {
        return new PLAPublish();
       });

      $this->commands([
          'pla:publish',
      ]);
    }
}
