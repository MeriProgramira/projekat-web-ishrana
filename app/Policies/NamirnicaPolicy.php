<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Namirnica;
use Illuminate\Auth\Access\HandlesAuthorization;

class NamirnicaPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Namirnica $namirnica)
    {
        return ($user->id === $namirnica->user_id || $user->admin_role= 1);
    }

    public function update(User $user, Namirnica $namirnica)
    {
        return ($user->id === $namirnica->user_id || $user->admin_role= 1);
    }
}
