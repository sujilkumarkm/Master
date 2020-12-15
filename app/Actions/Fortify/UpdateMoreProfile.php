<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\UpdateMoreProfile;

class UpdateMoreProfileForm implements UpdateMoreProfile
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user_data, array $input)
    {

    }

}
