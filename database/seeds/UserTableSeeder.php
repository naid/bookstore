<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create()->each(function ($user) {

            switch (rand(1, 2)) {
                case 1:
                    factory(App\Employee::class)->create(['user_id' => $user->id]);
                    break;
                case 2:
                default:
                    factory(App\Customer::class)->create(['user_id' => $user->id]);
                    break;
            }
        });
    }
}
