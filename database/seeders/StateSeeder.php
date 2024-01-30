<?php

// StateSeeder.php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run()
    {
        DB::table('states')->insert([
            ['country_id' => 1, 'name' => 'California', 'code' => 'CA'],
            ['country_id' => 1, 'name' => 'New York', 'code' => 'NY'],
            // Add more states as needed
        ]);
    }
}
