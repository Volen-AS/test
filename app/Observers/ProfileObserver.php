<?php

namespace App\Observers;

use App\Models\Profile;

class ProfileObserver
{
    /**
     * Handle the profile "creating" event.
     *
     * @param  Profile  $profile
     * @return void
     */
    public function creating(Profile $profile)
    {
        $this->setUser($profile);
    }

    protected function setUser(Profile $profile)
    {
        $profile->user_id = auth()->id();
    }

}
