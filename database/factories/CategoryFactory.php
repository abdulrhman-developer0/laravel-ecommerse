<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Number of category
     *
     * @var int
     */
    private $categoryNumber = 0;

    /**
     * Get category number
     *
     * @return int
     */
    public function categoryNumber(): int
    {
        $this->categoryNumber += 1;
        return $this->categoryNumber;
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = "category " . (string) $this->categoryNumber();
        $slug = str($name)->slug();

        return [
            'name' => $name,
            'slug' => $slug,
            'short_description' => $this->faker->text()
        ];
    }
}
