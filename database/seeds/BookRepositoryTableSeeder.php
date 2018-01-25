<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookRepositoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BookRepository::class, 20)->create()->each(function ($b) {

            switch (rand(1, 3)) {
                case 1:
                    factory(App\Bookstore::class)->create(['book_repository_id' => $b->id]);
                    break;
                case 2:
                    factory(App\Library::class)->create(['book_repository_id' => $b->id]);
                    break;
                case 3:
                default:
                    factory(App\Kiosk::class)->create(['book_repository_id' => $b->id]);
                    break;
            }
        });
    }
}
