<?php

// CountrySeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Country\Country;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = Country::all();

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country->name,
                'code' => $country->iso_3166_1_alpha2,
                // Add more columns as needed
            ]);
        }
    }
}