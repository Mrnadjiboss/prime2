<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records from the banners table
        Banner::truncate();

        // Create 5 new Banner objects and insert them into the database
        Banner::create([
            'img' => 'banner1.jpg',
            'badge' => 'New',
            'description' => 'Discover our latest collection',
        ]);

        Banner::create([
            'img' => 'banner2.jpg',
            'badge' => 'Sale',
            'description' => 'Huge discounts on selected items',
        ]);

        Banner::create([
            'img' => 'banner3.jpg',
            'badge' => 'Limited',
            'description' => 'Get them before they run out',
        ]);

        Banner::create([
            'img' => 'banner4.jpg',
            'badge' => 'Featured',
            'description' => 'Check out our featured products',
        ]);

        Banner::create([
            'img' => 'banner5.jpg',
            'badge' => 'Special',
            'description' => 'Special offers for our loyal customers',
        ]);
    }
}
