<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroBanner;

class HeroBannerSeeder extends Seeder
{
    public function run(): void
    {
        $heroes = [
            [
                'title' => 'Spring Collection 2026',
                'subtitle' => 'Fresh styles for your wardrobe',
                'button_text' => 'Shop Now',
                'button_link' => '/shop',
                'image' => 'https://source.unsplash.com/1600x600/?fashion,clothes',
            ],
            [
                'title' => 'Summer Essentials',
                'subtitle' => 'Brighten up your summer',
                'button_text' => 'Explore',
                'button_link' => '/summer',
                'image' => 'https://source.unsplash.com/1600x600/?summer,clothes',
            ],
            [
                'title' => 'New Arrivals',
                'subtitle' => 'Check out the latest trends',
                'button_text' => 'Shop Now',
                'button_link' => '/new-arrivals',
                'image' => 'https://source.unsplash.com/1600x600/?newfashion',
            ],
            [
                'title' => 'Casual Vibes',
                'subtitle' => 'Comfort meets style',
                'button_text' => 'Discover',
                'button_link' => '/casual',
                'image' => 'https://source.unsplash.com/1600x600/?casual,clothes',
            ],
            [
                'title' => 'Luxury Collection',
                'subtitle' => 'Premium fashion for you',
                'button_text' => 'Shop Luxury',
                'button_link' => '/luxury',
                'image' => 'https://source.unsplash.com/1600x600/?luxury,fashion',
            ],
        ];

        foreach ($heroes as $hero) {
            HeroBanner::firstOrCreate(
                ['title' => $hero['title']], // avoid duplicates
                $hero
            );
        }
    }
}