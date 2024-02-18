<?php

namespace App\Policies;

use App\Models\User;

class CategoryPolicy
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
        return $user->hasPermissionTo('create_category') ? true : false;
    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('update_category') ? true : false;
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('delete_category') ? true : false;
    }
}
