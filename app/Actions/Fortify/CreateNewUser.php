<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'universitas' => ['required', 'string', 'max:255'],
            'kompetisi' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'universitas' => $input['universitas'],
            'email' => $input['email'],
            'kompetisi' => $input['kompetisi'],
            'kategori' => $input['kategori'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
