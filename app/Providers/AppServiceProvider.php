<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Vue Component, render PHP and push template to vue-scripts stack.
        Blade::directive('vueComponent', function ($componentName) {
            $pushKey = '__pushonce_vue_'.$componentName;

            // pushes (only once!) the vuejs version of this to vue stack
            // makes a view, with the existing view data passed in, and renders it.
            return "<?php
                    if(! isset(\$__env->$pushKey)): \$__env->$pushKey = 1; \$__env->startPush('vue');
                    echo '<script type=\"text/x-template\" id=\"{$componentName}-template\">';
                    echo \$__env->make('{$componentName}', array_except(get_defined_vars(), ['__data', '__path']))->with(['vue' => true]);
                    echo '</script>';
                    \$__env->stopPush(); endif;

                    echo \$__env->make('{$componentName}', array_except(get_defined_vars(), ['__data', '__path']))->with(['vue' => false])->render();
                ?>";
        });
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
