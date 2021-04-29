<?php

namespace Tests\Feature;

use App\Models\SpaceWeed;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class FunctionalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIsIndexWorking()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSeeText('Login');
        $response->assertSeeText('Register');
        $response->assertSeeText('ADDITADO UNO WEEDO +');
        $response->assertSeeText('EDITADO');
        $response->assertSeeText('SUPPRIMADO');
    }

    public function testIsCreateWorking()
    {
        $response = $this->get('/create');
        $response->assertSeeText('Name');
        $response->assertSeeText('Description');
        $response->assertSeeText('Prix');
        $response->assertSeeText('Quantité');
    }

    public function testIsEditWorking()
    {
        $response = $this->get('/edit/21');
        $response->assertSeeText('Name');
        $response->assertSeeText('Description');
        $response->assertSeeText('Prix');
        $response->assertSeeText('Quantité');
    }

    public function testIsLoginWorking()
    {
        $response = $this->get('/login');
        $response->assertSeeText('Login');
        $response->assertSeeText('E-Mail Address');
        $response->assertSeeText('Password');

        $response = $this->postJson('/login', [
            'email' => 'test@test.fr',
            'password' => 'password'
        ]);

        $response->assertStatus(204);
    }

    public function testIsRegisterWorking()
    {
        $response = $this->get('/register');
        $response->assertSeeText('Register');
        $response->assertSeeText('E-Mail Address');
        $response->assertSeeText('Password');
        $response->assertSeeText('Name');
        $response->assertSeeText('Confirm Password');

        $response = $this->postJson('/register', [
            'email'
        ]);
    }

    public function testIsStoreWorking()
    {
        $response = $this->postJson('/store', [
            'name' => 'Name test',
            'description' => 'description test',
            'price' => 4,
            'quantity' => 15,
        ]);

        $response->assertStatus(302);
        $this->assertTrue(count(SpaceWeed::all()) >= 1);
    }
}
