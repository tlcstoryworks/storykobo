<?php

namespace Tests\Feature;

use App\Models\User;
use App\Rules\UsernameAvailable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class UsernameAvailableTest extends TestCase
{
    use RefreshDatabase;

    public function test_available_username_is_accepted(): void
    {
        $validator = Validator::make(
            ['username' => 'new_writer'],
            ['username' => [new UsernameAvailable()]]
        );

        $this->assertTrue($validator->passes());
    }

    public function test_existing_username_is_rejected_regardless_of_case(): void
    {
        User::factory()->create([
            'username' => 'ceri_ashward',
        ]);

        $validator = Validator::make(
            ['username' => 'CERI_ASHWARD'],
            ['username' => [new UsernameAvailable()]]
        );

        $this->assertFalse($validator->passes());
    }

    public function test_user_can_keep_their_own_username(): void
    {
        $user = User::factory()->create([
            'username' => 'ceri_ashward',
        ]);

        $validator = Validator::make(
            ['username' => 'CERI_ASHWARD'],
            ['username' => [new UsernameAvailable($user->id)]]
        );

        $this->assertTrue($validator->passes());
    }
}
