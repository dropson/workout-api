<?php

declare(strict_types=1);

namespace App\DTOs;

use App\Http\Requests\Auth\RegisterUserRequest;

final class UserDTO
{
    public function __construct(
        public string $email,
        public string $username,
        public string $password,
    ) {}

    public static function fromRequest(RegisterUserRequest $request): self
    {

        $data = $request->validated();

        return new self(
            email: $data['email'],
            username: $data['username'],
            password: $data['password']
        );
    }
}
