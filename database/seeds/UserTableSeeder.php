<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
//use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Perform insertion of dummy data of 100000 records
        for ($i = 0; $i <= 500; $i++) {
            // Insert the chunk of 200 records for 500 times
            factory(User::class, 200)->create();
        }
    }
}
