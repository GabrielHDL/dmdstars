<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            [
                'name' => 'white',
                'rgb' => '#FFFFFF',
            ],
            [
                'name' => 'blue',
                'rgb' => '#05356F',
            ],
            [
                'name' => 'red',
                'rgb' => '#BF0F15',
            ],
            [
                'name' => 'black',
                'rgb' => '#000000',
            ],
        ];

        foreach ($colors as $color) {
            Color::create([
                'name' => $color['name'],
                'rgb' => $color['rgb'],
            ]);
        }
    }
}
