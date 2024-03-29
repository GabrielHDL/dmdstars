<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class state34TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Cities for the state of NV - Nevada.
        //If the table 'cities' exists, insert the data to the table.
        if (DB::table('cities')->get()->count() >= 0) {
            DB::table('cities')->insert([
                ['name' => 'Fallon', 'state_id' => 34],
                ['name' => 'The Lakes', 'state_id' => 34],
                ['name' => 'Henderson', 'state_id' => 34],
                ['name' => 'Blue Diamond', 'state_id' => 34],
                ['name' => 'Boulder City', 'state_id' => 34],
                ['name' => 'Bunkerville', 'state_id' => 34],
                ['name' => 'Indian Springs', 'state_id' => 34],
                ['name' => 'Jean', 'state_id' => 34],
                ['name' => 'Logandale', 'state_id' => 34],
                ['name' => 'Mesquite', 'state_id' => 34],
                ['name' => 'Moapa', 'state_id' => 34],
                ['name' => 'Laughlin', 'state_id' => 34],
                ['name' => 'North Las Vegas', 'state_id' => 34],
                ['name' => 'Coyote Springs', 'state_id' => 34],
                ['name' => 'Cal Nev Ari', 'state_id' => 34],
                ['name' => 'Overton', 'state_id' => 34],
                ['name' => 'Searchlight', 'state_id' => 34],
                ['name' => 'Sloan', 'state_id' => 34],
                ['name' => 'Las Vegas', 'state_id' => 34],
                ['name' => 'Nellis Afb', 'state_id' => 34],
                ['name' => 'Gardnerville', 'state_id' => 34],
                ['name' => 'Genoa', 'state_id' => 34],
                ['name' => 'Glenbrook', 'state_id' => 34],
                ['name' => 'Minden', 'state_id' => 34],
                ['name' => 'Zephyr Cove', 'state_id' => 34],
                ['name' => 'Stateline', 'state_id' => 34],
                ['name' => 'Carson City', 'state_id' => 34],
                ['name' => 'Elko', 'state_id' => 34],
                ['name' => 'Spring Creek', 'state_id' => 34],
                ['name' => 'Carlin', 'state_id' => 34],
                ['name' => 'Deeth', 'state_id' => 34],
                ['name' => 'Jackpot', 'state_id' => 34],
                ['name' => 'Jarbidge', 'state_id' => 34],
                ['name' => 'Lamoille', 'state_id' => 34],
                ['name' => 'Montello', 'state_id' => 34],
                ['name' => 'Mountain City', 'state_id' => 34],
                ['name' => 'Owyhee', 'state_id' => 34],
                ['name' => 'Ruby Valley', 'state_id' => 34],
                ['name' => 'Tuscarora', 'state_id' => 34],
                ['name' => 'Wells', 'state_id' => 34],
                ['name' => 'West Wendover', 'state_id' => 34],
                ['name' => 'Dyer', 'state_id' => 34],
                ['name' => 'Goldfield', 'state_id' => 34],
                ['name' => 'Silverpeak', 'state_id' => 34],
                ['name' => 'Eureka', 'state_id' => 34],
                ['name' => 'Crescent Valley', 'state_id' => 34],
                ['name' => 'Denio', 'state_id' => 34],
                ['name' => 'Golconda', 'state_id' => 34],
                ['name' => 'Mc Dermitt', 'state_id' => 34],
                ['name' => 'Orovada', 'state_id' => 34],
                ['name' => 'Paradise Valley', 'state_id' => 34],
                ['name' => 'Valmy', 'state_id' => 34],
                ['name' => 'Winnemucca', 'state_id' => 34],
                ['name' => 'Austin', 'state_id' => 34],
                ['name' => 'Battle Mountain', 'state_id' => 34],
                ['name' => 'Alamo', 'state_id' => 34],
                ['name' => 'Caliente', 'state_id' => 34],
                ['name' => 'Hiko', 'state_id' => 34],
                ['name' => 'Panaca', 'state_id' => 34],
                ['name' => 'Pioche', 'state_id' => 34],
                ['name' => 'Dayton', 'state_id' => 34],
                ['name' => 'Fernley', 'state_id' => 34],
                ['name' => 'Silver City', 'state_id' => 34],
                ['name' => 'Silver Springs', 'state_id' => 34],
                ['name' => 'Smith', 'state_id' => 34],
                ['name' => 'Wellington', 'state_id' => 34],
                ['name' => 'Yerington', 'state_id' => 34],
                ['name' => 'Hawthorne', 'state_id' => 34],
                ['name' => 'Luning', 'state_id' => 34],
                ['name' => 'Mina', 'state_id' => 34],
                ['name' => 'Schurz', 'state_id' => 34],
                ['name' => 'Beatty', 'state_id' => 34],
                ['name' => 'Amargosa Valley', 'state_id' => 34],
                ['name' => 'Manhattan', 'state_id' => 34],
                ['name' => 'Mercury', 'state_id' => 34],
                ['name' => 'Pahrump', 'state_id' => 34],
                ['name' => 'Round Mountain', 'state_id' => 34],
                ['name' => 'Tonopah', 'state_id' => 34],
                ['name' => 'Gabbs', 'state_id' => 34],
                ['name' => 'Imlay', 'state_id' => 34],
                ['name' => 'Lovelock', 'state_id' => 34],
                ['name' => 'Virginia City', 'state_id' => 34],
                ['name' => 'Crystal Bay', 'state_id' => 34],
                ['name' => 'Empire', 'state_id' => 34],
                ['name' => 'Gerlach', 'state_id' => 34],
                ['name' => 'Nixon', 'state_id' => 34],
                ['name' => 'Sparks', 'state_id' => 34],
                ['name' => 'Sun Valley', 'state_id' => 34],
                ['name' => 'Verdi', 'state_id' => 34],
                ['name' => 'Wadsworth', 'state_id' => 34],
                ['name' => 'Incline Village', 'state_id' => 34],
                ['name' => 'Reno', 'state_id' => 34],
                ['name' => 'Washoe Valley', 'state_id' => 34],
                ['name' => 'Ely', 'state_id' => 34],
                ['name' => 'Baker', 'state_id' => 34],
                ['name' => 'Duckwater', 'state_id' => 34],
                ['name' => 'Lund', 'state_id' => 34],
                ['name' => 'Mc Gill', 'state_id' => 34],
                ['name' => 'Ruth', 'state_id' => 34]
            ]);
        }
    }
}
