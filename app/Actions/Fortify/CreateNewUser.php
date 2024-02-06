<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'dzongkhag_id' => ['nullable'],
            'division_id' => ['nullable'],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => 'recaptcha',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

    $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'gender' => $input['gender'],
            'dzongkhag_id' => $input['dzongkhag_id'],
            'password' => Hash::make($input['password']),
        ]);
        $user->roles()->sync('5');
        // $user->division_id = 3;
        return $user;
    }
}
