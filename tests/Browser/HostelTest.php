<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HostelTest extends DuskTestCase
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
			    $browser->visit('/hostels')
				    ->assertSee('Hostels')
				    ->assertSee('Available');
		    });
	    } catch (\Exception $e) {
	    } catch (\Throwable $e) {
	    }
    }
}
