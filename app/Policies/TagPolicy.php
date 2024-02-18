<?php

namespace App\Policies;

use App\Models\User;

class TagPolicy
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
        return $user->hasPermissionTo('create_tag') ? true : false;
    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('update_tag') ? true : false;
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('delete_tag') ? true : false;
    }
}
