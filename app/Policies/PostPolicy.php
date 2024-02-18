<?php

namespace App\Policies;

use App\Models\User;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_post') ? true : false;
    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('update_post') ? true : false;
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('delete_post') ? true : false;
    }
}
