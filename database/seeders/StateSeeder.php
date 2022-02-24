<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use Storage; 
use File;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =File::get(storage_path('data/state.json')); 
       	$someArray = json_decode($json, true);
       	State::insert($someArray);
    }
}

?>
