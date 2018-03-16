<?php

namespace Tests\Feature;

use App\User;
use Laravel\Dusk\Browser;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

	    $this->assertDatabaseHas('users', [
		    'email' => 'artisan254@gmail.com'
	    ]);

        $response->assertStatus(200);

    }
}
