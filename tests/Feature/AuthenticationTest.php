<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_page_can_be_rendered(): void
    {
        $this->get('/login')->assertStatus(200);
    }

    public function test_user_can_be_authenticated_using_his_credentials()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email'    => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_logged_in_user_can_logout()
    {
        // Kita memiliki 1 user terdaftar
        $user = User::factory()->create([
            'email'    => 'username@example.net',
            'password' => bcrypt('secret'),
        ]);

        // Login sebagai user tersebut
        $this->actingAs($user);
        $this->assertAuthenticatedAs($user);

        // Kunjungi halaman '/home'
        $this->get('/');

        // Buat post request ke url '/logout'
        $this->post('/logout');

        $this->get('/login');
    }
}
