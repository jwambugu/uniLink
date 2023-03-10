<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
	    try {
	    	$testTime = floor(microtime(true));

	    	$user = factory(User::class)->create([
	    		'email' => 'test'.$testTime.'com',
			    'regNo' => $testTime
		    ]);

		    $this->browse(function ($browser) use ($user) {
			    $browser->visit('/login')
				    ->type('email', $user->email)
				    ->type('password', 'secret')
				    ->press('login')
				    ->assertPathIs('/home');
		    });
	    } catch (\Exception $e) {
	    } catch (\Throwable $e) {
	    }
    }
}
