<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('book')->insert([
            'title' => 'The Book of ' . str_random(10),
            'book_number' => str_random(10),
        ]);*/
        factory(App\Book::class, 50)->create();
    }
}
