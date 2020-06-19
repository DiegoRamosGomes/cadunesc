<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('isRoute')) {

    function isRoute(string $route) : bool{
        return Route::currentRouteName() === $route;
    }
}
