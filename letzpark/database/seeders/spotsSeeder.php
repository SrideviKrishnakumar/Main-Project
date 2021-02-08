<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class spotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spots')->insert([
            'spots_Place' => 'Luxembourg',
            'spots_User' => 1
        ]);
        DB::table('spots')->insert([
            'spots_Place' => 'Test',
            'spots_User' => 2
        ]);
    }
}
