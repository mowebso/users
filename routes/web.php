<?php

use Illuminate\Support\Facades\Route;
use MoWebSo\Tenants\Controllers\ChangeTenantController;
use MoWebSo\Users\Controller\UserController;
use MoWebSo\Users\Models\User;

Route::macro('Users', function (string $baseUrl = 'users')
{
    Route::prefix($baseUrl)
         ->group(function ()
         {
             // Change Current Tenant For User
             // Route::get('change/{toTenantID}', ChangeTenantController::class)
             //      ->name('tenant.change');


         });
});
