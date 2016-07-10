<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class PersonnelTest extends TestCase
{

    //use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPersonnalsLink()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
            ->visit('/')
            ->click('Personnels')
            ->see('Personnels')
            ->seePageIs('/personnels');
    }

    public function testWelcomeMessage()
    {
        $this->visit('/')
            ->see('Welcome');

    }

    public function testRoutes()
    {
        //Tests for /personnels

        $get_response = $this->call('GET', 'personnels');
        $this->assertEquals(302, $get_response->status());

        $post_response = $this->call('POST', 'personnels');
        $this->assertEquals(405, $post_response->status());

        $put_response = $this->call('PUT', 'personnels');
        $this->assertEquals(405, $put_response->status());

        $delete_response = $this->call('DELETE', 'personnels');
        $this->assertEquals(405, $delete_response->status());

        // Tests for /personnel

        $get_response = $this->call('GET', 'personnel');
        $this->assertEquals(302, $get_response->status());

        $post_response = $this->call('POST', 'personnel');
        $this->assertEquals(302, $post_response->status());

    }

    public function testAuthenticationMiddleware(){
        $this->visit('/')
            ->click('Personnels')
            ->see('Login');
    }
}
