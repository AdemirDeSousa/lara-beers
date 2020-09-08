<?php

use Illuminate\Database\Seeder;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Beer::class, 10)->create();
    }
}
