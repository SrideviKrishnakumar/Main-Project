<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('reviews')->insert([
            'reviews_subject' => 'Unavailable',
            'reviews_message' => 'Magnifique parking pas trop de temps d attente avec un personel très aimable',
            'reviews_stars' => 4,
            'reviews_parking' => 1,
            'reviews_user' => 1
        ]);

        DB::table('reviews')->insert([
            'reviews_subject' => 'Tiny Parking for my car',
            'reviews_message' => 'Magnifique parking pas trop de temps d attente avec un personel très aimable',
            'reviews_stars' => 3,
            'reviews_parking' => 2,
            'reviews_user' => 2
        ]);
    }
}
