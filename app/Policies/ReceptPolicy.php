<?php

namespace App\Policies;

use App\Models\Recept;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceptPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */


    public function delete(User $user, Recept $recept)
    {
        return ($user->id === $recept->user_id || $user->admin_role= 1);
    }

    public function update(User $user, Recept $recept)
    {
        return ($user->id === $recept->user_id || $user->admin_role= 1);
    }
}
