<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUserCreation()
    {
        
        // $name = $this->faker->name();
        // $email = $this->faker->email();

        $response = $this->postJson('/api/test', [
            // 'name' => $name, 
            // 'email' => $email,
            // 'password' => $this->password, 
            // 'password_confirmation' => $this->password
        ]); 

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'message' => "Complete"
            ]);
    }//testUserCreation
}
