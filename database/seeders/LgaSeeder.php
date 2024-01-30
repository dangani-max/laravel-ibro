<?php

// LgaSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgaSeeder extends Seeder
{
    public function run()
    {
        DB::table('lgas')->insert([
            ['state_id' => 1, 'name' => 'Los Angeles'],
            ['state_id' => 1, 'name' => 'San Francisco'],
            // Add more LGAs as needed
        ]);
    }
}