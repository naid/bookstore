<?php

use Illuminate\Database\Seeder;

class BookTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BookTransaction::class, 25)->create();
    }
}
