<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('error', function ($code, $error, $status)
        {
            $errorResponse = [
                'status' => $status,
                'error' => [
                    'code' => $code,
                    'fields' => $error
                ],
                'data' => null
            ];
            return response()->json($errorResponse, $status);
        });

        Response::macro('success', function ($data, $status)
        {
            return response()->json([
                'status' => $status,
                'error' => null,
                'data' => $data
            ], $status);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
