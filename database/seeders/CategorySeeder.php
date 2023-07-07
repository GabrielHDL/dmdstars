<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            /* Men */
            [
                'gender_id' => 1,
                'name' => 'Wallets',
                'slug' => Str::slug('Wallets'),
            ],

            [
                'gender_id' => 1,
                'name' => 'Bags',
                'slug' => Str::slug('Bags'),
            ],
            [
                'gender_id' => 1,
                'name' => 'Accesories',
                'slug' => Str::slug('Accesories'),
            ],
            [
                'gender_id' => 1,
                'name' => 'Men Clothes',
                'slug' => Str::slug('Men Clothes'),
            ],

            /* Women */

            [
                'gender_id' => 2,
                'name' => 'Handbags',
                'slug' => Str::slug('Handbags'),
            ],
            [
                'gender_id' => 2,
                'name' => 'Wallets',
                'slug' => Str::slug('Wallets'),
            ],
            [
                'gender_id' => 2,
                'name' => 'Accesories',
                'slug' => Str::slug('Accesories'),
            ],
            [
                'gender_id' => 2,
                'name' => 'Women Clothes',
                'slug' => Str::slug('Women Clothes'),
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
