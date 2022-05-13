<?php

namespace MoWebSo\Users\Actions;

use MoWebSo\Users\Data\UserData;
use MoWebSo\Users\Models\User;

class CreateUser
{
    public function __invoke(
        UserData $userData
    ): User {
        return User::create($userData->include('password')->toArray());
    }
}
