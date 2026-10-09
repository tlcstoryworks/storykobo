<?php

namespace App\Rules;

use App\Models\User;
use App\Support\Username;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UsernameAvailable implements ValidationRule
{
    public function __construct(
        private ?int $ignoreUserId = null
    ) {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || Username::normalizeAndValidate($value) === null) {
            return;
        }

        $username = Username::normalize($value);

        $query = User::query()->where('username', $username);

        if ($this->ignoreUserId !== null) {
            $query->where('id', '!=', $this->ignoreUserId);
        }

        if ($query->exists()) {
            $fail('That username is already taken.');
        }
    }
}
