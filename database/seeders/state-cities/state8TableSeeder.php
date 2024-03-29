<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state8TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of DC - District of Columbia.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Washington', 'state_id' => 8],
                ['name' => 'Naval Anacost Annex', 'state_id' => 8],
                ['name' => 'Washington Navy Yard', 'state_id' => 8]
            ]);
        }
    }
}
