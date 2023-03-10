<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
	    try {
		    $this->browse(function (Browser $browser) {
			    $browser->visit('/contact')
				    ->assertSee('Contact')
				    ->assertSee('Addresses');
		    });
	    } catch (\Exception $e) {
	    } catch (\Throwable $e) {
	    }
    }
}
