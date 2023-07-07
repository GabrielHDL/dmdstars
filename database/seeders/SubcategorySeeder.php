<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            /* Wallets Men */
            [
                'category_id' => 1,
                'name' => 'Bifold',
                'slug' => Str::slug('Bifold'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Trifold',
                'slug' => Str::slug('Trifold'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Card Holders',
                'slug' => Str::slug('Card Holders'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'MoneyClips',
                'slug' => Str::slug('MoneyClips'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Checkbook Covers',
                'slug' => Str::slug('Checkbook Covers'),
                'color' => true
            ],

            /* Men Bags */

            [
                'category_id' => 2,
                'name' => 'Toiletry',
                'slug' => Str::slug('Toiletry'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Work Bags',
                'slug' => Str::slug('Work Bags'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Duffles',
                'slug' => Str::slug('Duffles'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Backpacks',
                'slug' => Str::slug('Backpacks'),
                'color' => true
            ],

            /* Men Accesories */

            [
                'category_id' => 3,
                'name' => 'Watch & Valet',
                'slug' => Str::slug('Watch & Valet'),
            ],
            [
                'category_id' => 3,
                'name' => 'Key & Coin',
                'slug' => Str::slug('Key & Coin'),
            ],

            /* Men Clothes */

            [
                'category_id' => 4,
                'name' => 'Men Jackets',
                'slug' => Str::slug('Men Jackets'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Jeans',
                'slug' => Str::slug('Jeans'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Shirts',
                'slug' => Str::slug('Shirts'),
                'color' => true,
                'size' => true
            ],

            /* Women Handbags */

            [
                'category_id' => 5,
                'name' => 'Totes',
                'slug' => Str::slug('Totes'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Cross Bodies',
                'slug' => Str::slug('Cross Bodies'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Bucket Bags',
                'slug' => Str::slug('Bucket Bags'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Mini Bags',
                'slug' => Str::slug('Mini Bags'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Backpacks',
                'slug' => Str::slug('Backpacks'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Straps & Scarves',
                'slug' => Str::slug('Straps & Scarves'),
                'color' => true
            ],

            /* Women Wallets */

            [
                'category_id' => 6,
                'name' => 'Card Holders',
                'slug' => Str::slug('Card Holders'),
                'color' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Checkbook Covers',
                'slug' => Str::slug('Checkbook Covers'),
                'color' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Key & Coin',
                'slug' => Str::slug('Key & Coin'),
            ],

            /* Women Accesories */

            [
                'category_id' => 7,
                'name' => 'Cosmetic Bags',
                'slug' => Str::slug('Cosmetic Bags'),
                'color' => true
            ],
            [
                'category_id' => 7,
                'name' => 'Pouches',
                'slug' => Str::slug('Pouches'),
                'color' => true
            ],
            [
                'category_id' => 7,
                'name' => 'Jewelry Organizers',
                'slug' => Str::slug('Jewelry Organizers'),
                'color' => true
            ],

            /* Women Clothes */

            [
                'category_id' => 8,
                'name' => 'Women Jackets',
                'slug' => Str::slug('Women Jackets'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 8,
                'name' => 'Sweaters',
                'slug' => Str::slug('Jeans'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 8,
                'name' => 'Tops',
                'slug' => Str::slug('Shirts'),
                'color' => true,
                'size' => true
            ],
        ];

        foreach ($subcategories as $subcategory) {

            // Category::factory(1)->create($category);

            Subcategory::create($subcategory);
        }
    }
}
