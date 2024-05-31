<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('members')->insert([
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '123456789', 'club_id' => 1],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => '987654321', 'club_id' => 2],
            ['name' => 'Jim Brown', 'email' => 'jim.brown@example.com', 'phone' => '456789123', 'club_id' => 1],
            ['name' => 'Lucy White', 'email' => 'lucy.white@example.com', 'phone' => '789123456', 'club_id' => 3],
        ]);
    }
}
