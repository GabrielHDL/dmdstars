<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Faker($faker));

        return [
            'url' => 'products/' . $faker->image($dir = 'public/storage/products', $width = 640, $height = 480, $isFullPath = false)
        ];
    }
}
