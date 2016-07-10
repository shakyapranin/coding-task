<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class PersonnelTest extends TestCase
{

    use WithoutMiddleware;

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

    /**
     * Test welcome message
     */
    public function testWelcomeMessage()
    {
        $this->visit('/')
            ->see('Welcome');

    }

    /**
     * Test application routes
     */
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

    /**
     * Verify working of auth middleware
     */
    public function testAuthenticationMiddleware()
    {
        $this->visit('/')
            ->click('Personnels')
            ->see('Login');
    }

    /**
     * @group form
     * Test to check Personnel form
     */
    public function testPersonnelForm()
    {
        $this->withoutMiddleware(); // Test forms excluding auth middleware
        $this->visit('/personnel')
            ->type('Taylor', 'name')
            ->type('9841953709', 'phone')
            ->type('test@lorem.com', 'email')
            ->type('Mangal Bazar - 12, Lalitpur, Nepal', 'address')
            ->type('07/25/2016', 'date_of_birth')
            ->type('Bachelors in information management', 'education_background')
            ->select('email', 'preferred_mode_of_contact')
            ->press('Save')
            ->seePageIs('/personnel');
    }
    
}
