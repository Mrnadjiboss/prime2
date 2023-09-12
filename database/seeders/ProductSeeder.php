<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Product;
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
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 8; $i++) {
                Product::create([
                    'img' => "link.jpg",
                    'name' => "{Product {$i}",
                    'description' => "This is the description for Product {$i}.", // Add description
                    'price' => rand(10, 100),
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
