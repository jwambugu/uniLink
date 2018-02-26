<?php

use Illuminate\Database\Seeder;

class HostelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call the model factory
	    factory(App\Hostel::class, 5)->create();
    }
}
