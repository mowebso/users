<?php

namespace MoWebSo\Users\Data;

use Illuminate\Support\Carbon;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $id,
        public ?string $name,
        public ?string $email,
        public Carbon|null $created_at,
        public Carbon|null $updated_at
    ) {
    }
}
