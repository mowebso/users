<?php

namespace MoWebSo\Users\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MoWebSo\Users\Models\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function viewAny(User $user) : bool
    {
        return $user->tenants()
             ->wherePivot('is_owner', true)->exists();
    }
}
