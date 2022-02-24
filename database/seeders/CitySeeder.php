<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =File::get(storage_path('data/cities.json')); 
       	$someArray = json_decode($json, true);
		City::insert($someArray);
    }

}

?>
