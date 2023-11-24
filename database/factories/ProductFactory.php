<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Number of category
     *
     * @var int
     */
    private $productNumber = 0;

    /**
     * Get category number
     *
     * @return int
     */
    public function productNumber(): int
    {
        $this->productNumber += 1;
        return $this->productNumber;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = "product " . (string) $this->productNumber();
        $slug = str($name)->slug();

        return [
            'name' => $name,
            'slug' => $slug,
            'short_description' => $this->faker->text(),
            'long_description' => $this->faker->text(500),
            'price' => random_int(50, 1005)
        ];
    }
}
