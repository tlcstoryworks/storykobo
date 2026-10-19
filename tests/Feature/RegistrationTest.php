<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_page_is_available(): void
    {
        $this->get('/register')
            ->assertOk()
            ->assertSee('Join storykōbō');
    }

    public function test_visitor_can_register_with_a_normalized_username(): void
    {
        $response = $this->post('/register', [
            'name' => 'New Writer',
            'username' => '  TestWriter42  ',
            'email' => 'new-writer@example.com',
            'password' => 'Example-Password-42!',
            'password_confirmation' => 'Example-Password-42!',
        ]);

        $user = User::where('email', 'new-writer@example.com')->first();

        $this->assertNotNull($user);
        $this->assertSame('testwriter42', $user->username);
        $this->assertAuthenticatedAs($user);

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Welcome to storykōbō!');
    }

    public function test_duplicate_usernames_are_rejected_without_case_sensitivity(): void
    {
        User::factory()->create([
            'username' => 'existingwriter',
        ]);

        $response = $this->post('/register', [
            'name' => 'Another Writer',
            'username' => 'ExistingWriter',
            'email' => 'another-writer@example.com',
            'password' => 'Example-Password-42!',
            'password_confirmation' => 'Example-Password-42!',
        ]);

        $response->assertSessionHasErrors('username');
        $this->assertDatabaseMissing('users', [
            'email' => 'another-writer@example.com',
        ]);
    }
}

