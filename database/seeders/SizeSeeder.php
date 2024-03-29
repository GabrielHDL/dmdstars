<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                    ->where('size', true);
        })->get();


        $sizes = ['S', 'M', 'L', 'XL', 'XXL'];

        foreach ($products as $product) {

            foreach ($sizes as $size) {
                $product->sizes()->create([
                    'name' => $size
                ]);
            }
            
        }
    }
}
