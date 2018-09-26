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
        // Insert one lakh dummy data in db
        for ($i = 0; $i <= 500; $i++) {
            factory(User::class, 200)->create();
        }
    }
}
