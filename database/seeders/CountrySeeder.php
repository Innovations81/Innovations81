<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Storage; 
use File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =File::get(storage_path('data/country.json')); 
       	$someArray = json_decode($json, true);
        Country::insert($someArray);
    }
}

?>
