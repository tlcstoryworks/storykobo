<?php

namespace Tests\Unit;

use App\Support\Username;
use PHPUnit\Framework\TestCase;

class UsernameTest extends TestCase
{
    public function test_username_is_normalized_to_lowercase(): void
    {
        $this->assertSame(
            'ceri_ashward',
            Username::normalizeAndValidate('  Ceri_Ashward  ')
        );
    }

    public function test_valid_username_is_accepted(): void
    {
        $this->assertTrue(Username::isValid('ceri_ashward'));
        $this->assertTrue(Username::isValid('writer2026'));
    }

    public function test_username_with_hyphen_is_rejected(): void
    {
        $this->assertFalse(Username::isValid('ceri-ashward'));
    }

    public function test_username_longer_than_30_characters_is_rejected(): void
    {
        $this->assertFalse(
            Username::isValid('abcdefghijklmnopqrstuvwxyz12345')
        );
    }

    public function test_empty_username_is_rejected(): void
    {
        $this->assertFalse(Username::isValid(''));
    }
}