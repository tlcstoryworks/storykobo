<?php

namespace App\Support;

class Username
{
    public static function normalize(string $username): string
    {
        return strtolower(trim($username));
    }

    public static function isValid(string $username): bool
    {
        return preg_match('/\A[a-z0-9_]{1,30}\z/', $username) === 1;
    }

    public static function normalizeAndValidate(string $username): ?string
    {
        $username = self::normalize($username);

        return self::isValid($username) ? $username : null;
    }
}
