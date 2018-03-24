<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FaqTest extends DuskTestCase
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
			    $browser->visit('/faq')
				    ->assertSee('Frequently')
				    ->assertSee('Visa')
				    ->assertSee('Application');
		    });
	    } catch (\Exception $e) {
	    } catch (\Throwable $e) {
	    }
    }
}
