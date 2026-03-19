<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Men products (15 items)
        $menProducts = [
            ['title' => 'Street Hoodie', 'price' => 45, 'image' => 'https://source.unsplash.com/300x300/?hoodie', 'category' => 'men'],
            ['title' => 'Denim Jacket', 'price' => 60, 'image' => 'https://source.unsplash.com/300x300/?jacket', 'category' => 'men'],
            ['title' => 'Casual T-Shirt', 'price' => 25, 'image' => 'https://source.unsplash.com/300x300/?tshirt', 'category' => 'men'],
            ['title' => 'Chinos Pants', 'price' => 40, 'image' => 'https://source.unsplash.com/300x300/?pants', 'category' => 'men'],
            ['title' => 'Leather Boots', 'price' => 80, 'image' => 'https://source.unsplash.com/300x300/?boots', 'category' => 'men'],
            ['title' => 'Sneakers', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sneakers', 'category' => 'men'],
            ['title' => 'Beanie Hat', 'price' => 20, 'image' => 'https://source.unsplash.com/300x300/?hat', 'category' => 'men'],
            ['title' => 'Summer Shorts', 'price' => 30, 'image' => 'https://source.unsplash.com/300x300/?shorts', 'category' => 'men'],
            ['title' => 'Polo Shirt', 'price' => 35, 'image' => 'https://source.unsplash.com/300x300/?polo', 'category' => 'men'],
            ['title' => 'Jogger Pants', 'price' => 40, 'image' => 'https://source.unsplash.com/300x300/?joggers', 'category' => 'men'],
            ['title' => 'Windbreaker Jacket', 'price' => 65, 'image' => 'https://source.unsplash.com/300x300/?windbreaker', 'category' => 'men'],
            ['title' => 'Graphic Hoodie', 'price' => 50, 'image' => 'https://source.unsplash.com/300x300/?hoodie,graphic', 'category' => 'men'],
            ['title' => 'Cardigan Sweater', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sweater', 'category' => 'men'],
            ['title' => 'Denim Shorts', 'price' => 35, 'image' => 'https://source.unsplash.com/300x300/?denim,shorts', 'category' => 'men'],
            ['title' => 'Trucker Hat', 'price' => 20, 'image' => 'https://source.unsplash.com/300x300/?cap', 'category' => 'men'],
        ];

        // Women products (15 items)
        $womenProducts = [
            ['title' => 'Summer Dress', 'price' => 50, 'image' => 'https://source.unsplash.com/300x300/?dress', 'category' => 'women'],
            ['title' => 'Floral Skirt', 'price' => 45, 'image' => 'https://source.unsplash.com/300x300/?skirt', 'category' => 'women'],
            ['title' => 'Blouse Top', 'price' => 35, 'image' => 'https://source.unsplash.com/300x300/?blouse', 'category' => 'women'],
            ['title' => 'High Heels', 'price' => 70, 'image' => 'https://source.unsplash.com/300x300/?heels', 'category' => 'women'],
            ['title' => 'Leather Bag', 'price' => 80, 'image' => 'https://source.unsplash.com/300x300/?bag', 'category' => 'women'],
            ['title' => 'Sneakers Women', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sneakers,women', 'category' => 'women'],
            ['title' => 'Cardigan Sweater', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?sweater,women', 'category' => 'women'],
            ['title' => 'Denim Jacket Women', 'price' => 60, 'image' => 'https://source.unsplash.com/300x300/?denim,jacket,women', 'category' => 'women'],
            ['title' => 'Summer Shorts Women', 'price' => 30, 'image' => 'https://source.unsplash.com/300x300/?shorts,women', 'category' => 'women'],
            ['title' => 'Polo Shirt Women', 'price' => 35, 'image' => 'https://source.unsplash.com/300x300/?polo,women', 'category' => 'women'],
            ['title' => 'Windbreaker Jacket Women', 'price' => 65, 'image' => 'https://source.unsplash.com/300x300/?windbreaker,women', 'category' => 'women'],
            ['title' => 'Graphic Hoodie Women', 'price' => 50, 'image' => 'https://source.unsplash.com/300x300/?hoodie,graphic,women', 'category' => 'women'],
            ['title' => 'Denim Skirt', 'price' => 40, 'image' => 'https://source.unsplash.com/300x300/?denim,skirt', 'category' => 'women'],
            ['title' => 'Trucker Hat Women', 'price' => 20, 'image' => 'https://source.unsplash.com/300x300/?cap,women', 'category' => 'women'],
            ['title' => 'Casual Dress', 'price' => 55, 'image' => 'https://source.unsplash.com/300x300/?dress,casual', 'category' => 'women'],
        ];

        // Combine arrays
        $allProducts = array_merge($menProducts, $womenProducts);

        foreach ($allProducts as $product) {
            Product::firstOrCreate(
                ['title' => $product['title']], // unique check
                [
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'category' => $product['category']
                ]
            );
        }
    }
}