<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rentalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rentals')->insert([
            'rental_name' => 'Place Guillaume',
            'rental_address' => 'Place Guillame 2 Knedler',
            'rental_neighborhood' => 'Belair',
            'rental_Description' => 'It\'s kinda good, I would go again',
            'rental_cost' => 50.45,
            'Rental_Image' => 'imagePlaceGuillaume.png',
            'Rental_Current' => 1,
            'rental_user' => 1
        ]);

        DB::table('rentals')->insert([
            'rental_name' => 'Parking Monterey',
            'rental_address' => 'Avenue Monterey',
            'rental_neighborhood' => 'Luxembourg',
            'rental_Description' => 'Great experience, would go again',
            'rental_cost' => 600,
            'Rental_Image' => 'imageParkingMonterey.png',
            'Rental_Current' => 0,
            'rental_user' => 2
        ]);
    }
}
