<?php

namespace App\Rules;

use App\Support\Username;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidUsername implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || Username::normalizeAndValidate($value) === null) {
            $fail('The :attribute must be 1–30 characters and contain only letters, numbers, and underscores.');
        }
    }
}
