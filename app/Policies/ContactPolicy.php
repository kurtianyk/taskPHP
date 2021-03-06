<?php

namespace App\Policies;
use App\User;
use App\Contact;


use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
     public function destroy(User $user, Contact $contact)
     {
       return $user->id === $contact->user_id;
     }
     public function update(User $user, Contact $contact)
     {
       return $user->id === $contact->user_id;
     }
}
