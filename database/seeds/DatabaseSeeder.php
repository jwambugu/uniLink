<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(HostelTableSeeder::class);
         $this->call(AdminTableSeeder::class);
//         $this->call(RoomTableSeeder::class);
    }
}
