<?php

namespace Laraflat\Users\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class LaraflatUserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        /*
         * load routes , migrations , views
         * this function will append routes , migrations , views
         * with namespace laraflat
         */

        $this->LoadImportantFiles();

        /*
         * run make:auth command
         * this very important to use auth middleware
         */

        Artisan::call("make:auth");

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
    * Load files
    * migration , views , routes
    */

    public function LoadImportantFiles()
    {
        /*
        * load admin routes
        */

        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');

        /*
         * load Authenticate routes
         */

        $this->loadRoutesFrom(__DIR__ . '/../routes/auth.php');


        /*
         * load Guest routes
         */

        $this->loadRoutesFrom(__DIR__ . '/../routes/guest.php');

        /*
         * load migrations files
         */

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        /*
         * loads views files
         */

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laraflat');
    }

}
