<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Producer;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProducerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        //
    } */

    public function delete(User $user, Producer $producer)
    {
        return ($user->id === $producer->user_id || $user->admin_role= 1);
    }

    public function update(User $user, Producer $producer)
    {
        return ($user->id === $producer->user_id || $user->admin_role= 1);
    }
}
