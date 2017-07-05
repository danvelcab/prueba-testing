<?php

namespace App\Providers;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ApiStatusCodeServiceProvider extends ServiceProvider {
    const SUCCESS_CODE = 200;
    const CREATION_SUCCESS_CODE = 201;

    const FAILED_VALIDATOR_CODE = 422;
}
