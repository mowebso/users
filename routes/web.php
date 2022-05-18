<?php

use Illuminate\Support\Facades\Route;

Route::macro('Users', function (string $baseUrl = 'users')
{
    Route::prefix($baseUrl)
         ->group(function ()
         {

         });
});
