<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesMoreProfiles;

class UpdateMoreProfile implements UpdatesMoreProfiles
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user_data
     * @param  array  $input
     * @return void
     */
    public function update($user_data, array $input)
    {
        Validator::make($input, [
            'sex' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'number', 'max:255', Rule::unique('user_data')->ignore($user_data->id)],
            'phone1' => ['required', 'number', 'max:10'],
            'star' => ['star', 'string', 'max:255'],
            'jathakam' => ['jathakam', 'string', 'max:255'],
            'dob' => ['dob', 'string', 'max:255'],
            'tob' => ['tob', 'string', 'max:255'],
        ])->validateWithBag('UpdatesMoreProfiles');

        if (isset($input['sex'])) {
            $user_data->$input['sex'];
        }
        if (isset($input['phone'])) {
            $user_data->$input['phone'];
        }
        if (isset($input['phone1'])) {
            $user_data->$input['phone1'];
        }
        if (isset($input['star'])) {
            $user_data->$input['star'];
        }
        if (isset($input['jathakam'])) {
            $user_data->$input['jathakam'];
        }
        if (isset($input['dob'])) {
            $user_data->$input['dob'];
        }
        else {
            $user_data->forceFill([
                'tob' => $input['tob'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */

}
