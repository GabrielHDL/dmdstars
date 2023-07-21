<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('brands');
        Storage::deleteDirectory('genders');

        Storage::makeDirectory('categories');
        Storage::makeDirectory('products');
        Storage::makeDirectory('brands');
        Storage::makeDirectory('genders');

        $this->call(UserSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ColorSizeSeeder::class);
        $this->call(DepartmentSeeder::class);
    }
}
