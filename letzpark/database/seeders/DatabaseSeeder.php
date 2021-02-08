<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usersSeeder::class);
        $this->call(parkingsSeeder::class);
        $this->call(onlineSeeder::class);
        $this->call(rentalsSeeder::class);
        $this->call(reviewsSeeder::class);
        $this->call(spotsSeeder::class);
        $this->call(BugsSeeder::class);
    }
}
