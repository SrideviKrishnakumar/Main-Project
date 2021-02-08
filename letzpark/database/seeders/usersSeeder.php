<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // I will put only two examples of each table but i will populate the table with sql query 
        // The file will be available if applicable

        DB::table('users')->insert([
            'firstname' => 'Cyriaque',
            'lastname' => 'Yedagne',
            'phone' => '+352661341404',
            'email' => 'cyriaque@numricall.lu',
            'password' => '12345678',
            'admin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'firstname' => 'Brenda',
            'lastname' => 'Cayzac',
            'phone' => '+352621676626',
            'email' => 'brendacayzac@gmail.com',
            'password' => '12345678',
            'admin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'firstname' => 'test',
            'lastname' => 'Test',
            'phone' => '+352621676626',
            'email' => 'test@email.com',
            'password' => '12345678',
            'admin' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
