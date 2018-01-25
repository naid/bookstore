<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookAvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BookAvailability::class, 70)->create();
    }
}
