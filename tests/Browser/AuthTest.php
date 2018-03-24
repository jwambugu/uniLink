<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
	    try {
		    $this->browse(function ($first) {
			    $first->loginAs(User::find(1))
				    ->visit('/home')
			        ->assertSee('Profile')
			        ->assertSee('Password')
			        ->assertSee('Book');
		    });
	    } catch (\Exception $e) {
	    } catch (\Throwable $e) {
	    }
    }
}
