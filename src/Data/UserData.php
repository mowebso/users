<?php

namespace MoWebSo\Users\Data;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\LaravelData\Data;
use Illuminate\Validation\Rules;
use Spatie\LaravelData\Lazy;

class UserData extends Data
{
    public function __construct(
        public ?int $id,
        public ?int $current_tenant_id,
        public string $first_name,
        public string $last_name,
        public string $email,
        public Lazy|string $password,
        public Carbon|null $created_at,
        public Carbon|null $updated_at
    ) {
    }

    public static function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public static function fromArray(array $data) : UserData
    {
        return new self(
            id: $data['id'] ?? null,
            current_tenant_id: $data['current_tenant_id'] ?? null,
            first_name: $data['first_name'],
            last_name: $data['last_name'],
            email: $data['email'],
            password: Lazy::create(fn() => Hash::make($data['password'])),
            created_at: $data['created_at'] ?? null,
            updated_at: $data['updated_at'] ?? null,
        );
    }
}
