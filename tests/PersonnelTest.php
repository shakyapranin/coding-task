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
}
