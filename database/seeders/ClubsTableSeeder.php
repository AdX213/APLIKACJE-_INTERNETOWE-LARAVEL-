<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clubs')->insert([
            ['name' => 'Fishing Club A', 'location' => 'Lakeview', 'description' => 'Club A is focused on lake fishing.'],
            ['name' => 'Fishing Club B', 'location' => 'Riverside', 'description' => 'Club B specializes in river fishing.'],
            ['name' => 'Fishing Club C', 'location' => 'Seaside', 'description' => 'Club C enjoys ocean fishing.'],
        ]);
    }
}
