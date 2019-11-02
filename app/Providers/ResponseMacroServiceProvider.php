<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('create', function ($response, $redirect) {
            // createFlashMessage('error', 'Failed! Please try again');
            // if ($response) createFlashMessage('success', 'Record created');

            return redirect($redirect);
        });

        Response::macro('update', function ($response, $redirect) {
            // createFlashMessage('error', 'Failed! Please try again');
            // if ($response) createFlashMessage('success', 'Record updated');

            return redirect($redirect);
        });

        Response::macro('delete', function ($response, $redirect) {
            // createFlashMessage('error', 'Failed! Please try again', false);
            // if ($response) createFlashMessage('success', 'Record deleted');

            return redirect($redirect);
        });

        Response::macro('booiking', function ($response, $redirect) {
            // createFlashMessage('error', 'Failed! Please try again', false);
            // if ($response) createFlashMessage('error', 'Please select the booking slots');

            return redirect($redirect);
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
}
