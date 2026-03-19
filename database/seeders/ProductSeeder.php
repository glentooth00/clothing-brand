<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['title' => 'Street Hoodie', 'price' => 45, 'image' => 'https://source.unsplash.com/300x300/?hoodie'],
            ['title' => 'Denim Jacket', 'price' => 60, 'image' => 'https://source.unsplash.com/300x300/?jacket'],
            ['title' => 'Summer Dress', 'price' => 50, 'image' => 'https://source.unsplash.com/300x300/?dress'],
            ['title' => 'Casual T-Shirt', 'price' => 25, 'image' => 'https://source.unsplash.com/300x300/?tshirt'],
            ['title' => 'Chinos Pants', 'price' => 40, 'image' => 'https://source.unsplash.com/300x300/?pants'],
            ['title' => 'Leather Boots', 'price' => 80, 'image' => 'https://source.unsplash.com/300x300/?boots'],
            ['title' => 'Sneakers', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sneakers'],
            ['title' => 'Beanie Hat', 'price' => 20, 'image' => 'https://source.unsplash.com/300x300/?hat'],
            ['title' => 'Summer Shorts', 'price' => 30, 'image' => 'https://source.unsplash.com/300x300/?shorts'],
            ['title' => 'Floral Skirt', 'price' => 45, 'image' => 'https://source.unsplash.com/300x300/?skirt'],
            ['title' => 'Graphic Hoodie', 'price' => 50, 'image' => 'https://source.unsplash.com/300x300/?hoodie,graphic'],
            ['title' => 'Windbreaker Jacket', 'price' => 65, 'image' => 'https://source.unsplash.com/300x300/?windbreaker'],
            ['title' => 'Polo Shirt', 'price' => 35, 'image' => 'https://source.unsplash.com/300x300/?polo'],
            ['title' => 'Cardigan Sweater', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sweater'],
            ['title' => 'Jogger Pants', 'price' => 40, 'image' => 'https://source.unsplash.com/300x300/?joggers'],
        ];

        foreach ($products as $product) {
            // Check if a product with the same title already exists
            Product::firstOrCreate(
                ['title' => $product['title']], // unique field to check
                ['price' => $product['price'], 'image' => $product['image']] // values to insert if not exists
            );
        }
    }
}