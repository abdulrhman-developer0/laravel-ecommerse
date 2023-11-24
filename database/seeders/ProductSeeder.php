<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all(['id']);
        $products = Product::factory(10)->create();

        foreach ($products->chunk(3) as  $chunk) {
            foreach ($categories as $category) {
                foreach ($chunk as $product) {
                    $product->categories()->attach($category);
                }
            }
        }
    }
}
