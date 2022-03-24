<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_can_register()
    {
        $user = User::factory()->make();

        $response = $this->postJson('/api/register', array_merge($user->toArray(), ['password' => 'password']));

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                "status",
                "data",
                "access_token",
                "token_type"
            ]);

        $this->assertDatabaseHas('users', $user->toArray());


    }

    public function test_user_can_login()
    {
        $user = User::factory()->create();

        $credentials = array_merge(
            $user->only('email'),
            [
                "password" => "password"
            ]
        );

        $response = $this->postJson('/api/login', $credentials);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                "data",
                "access_token",
                "token_type"
            ]);
    }
}
