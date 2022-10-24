<?php

namespace AhmetBarut\LaravelHelper;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('dd_if', function ($arguments) {
            [$condition, $arguments] = explode(',', $arguments);
            $condition = substr($condition, 0);
            $arguments = trim($arguments);
            return "<?php if ($condition) { dd({$arguments}); } ?>";
        });
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

    /**
     * Load helpers
     */
    // public function loadHelpers()
    // {
    //     foreach (glob(__DIR__ . '/helpers/*.php') as $filename) {
    //         require_once($filename);
    //     }
    // }
}
