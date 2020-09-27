<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

Route::get(env('GOOGLE_CLOUD_TASK_SCHEDULER_URI', '/task_scheduler'), function (Request $request) {
    // refuse to run command if there is no X-Appengine-Cron header in the request
    if (empty($request->header('X-Appengine-Cron'))) {
        throw new BadRequestHttpException('No X-Appengine-Cron header found');
    }

    Artisan::call('schedule:run');
});
