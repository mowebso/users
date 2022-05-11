<?php

namespace MoWebSo\Users\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MoWebSo\Users\Users
 */
class Users extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'users';
    }
}
