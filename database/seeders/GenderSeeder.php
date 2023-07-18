<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                'name' => 'Women',
                'slug' => Str::slug('Women'),
                'icon' => '<i class="fa-solid fa-person-dress"></i>'
            ],
            [
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'icon' => '<i class="fa-solid fa-person"></i>'
            ],
        ];

        foreach ($genders as $gender) {
            $gender = Gender::factory(1)->create($gender)->first();
        }
    }
}
