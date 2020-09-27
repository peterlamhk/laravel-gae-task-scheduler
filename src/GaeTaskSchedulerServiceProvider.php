<?php

namespace Retepmal\LaravelGaeTaskScheduler;

use Illuminate\Support\ServiceProvider;

class GaeTaskSchedulerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function register()
    {
        //
    }
}
