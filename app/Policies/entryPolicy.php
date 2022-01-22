<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class entryPolicy
{
    use HandlesAuthorization;
    
    public function update($user, $entry){
        return ($user->id === $entry->user_id);
    }
}
