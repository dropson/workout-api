<?php

declare(strict_types=1);

namespace App\DTOs;

use App\Http\Requests\Auth\RegisterUserRequest;

final class UserDTO
{
    public function __construct(
        public string $email,
        public string $firstName,
        public string $lastName,
        public string $password,
    ) {}

    public static function fromRequest(RegisterUserRequest $request): self
    {

        $data = $request->validated();

        return new self(
            email: $data['email'],
            firstName: $data['first_name'],
            lastName: $data['last_name'],
            password: $data['password']
        );
    }
}
