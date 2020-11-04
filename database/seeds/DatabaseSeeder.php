<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker::create();
        foreach(range(1,10) as $index)
        {
        	DB::table('users')->insert([
               
               'name' => $faker->name,
               'email' =>$faker->email,
               'password' => $faker->password
               


        	]);
        }

    }
}
