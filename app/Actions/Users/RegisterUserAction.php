<?php

declare(strict_types=1);

namespace App\Actions\Users;

use App\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

final class RegisterUserAction
{
    public function handle(UserDTO $data)
    {

        return User::create([
            'first_name' => $data->firstName,
            'last_name' => $data->lastName,
            'email' => $data->email,
            'password' => Hash::make($data->password),
            'email_verified_at' => now(),
        ]);
    }
}
