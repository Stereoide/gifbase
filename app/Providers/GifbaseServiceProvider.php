<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GifbaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    static public function getFileHash($path) {
        if (!file_exists($path)) {
            return false;
        }

        return sha1_file($path);
    }
}
