<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = \App\Models\Category::factory()->create([
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Food and Beverage',
            'slug' => 'food-and-beverage',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Handicrafts',
            'slug' => 'handicrafts',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Home and Living',
            'slug' => 'home-and-living',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Beauty and Personal Care',
            'slug' => 'beautify-and-personal-care',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Tech and Electronics',
            'slug' => 'tech-and-electronics',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Toys and Games',
            'slug' => 'toys-and-games',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Health and Wellness',
            'slug' => 'health-and-wellness',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Jewelry',
            'slug' => 'jewelry',
        ]);

        $category = \App\Models\Category::factory()->create([
            'name' => 'Books and Stationery',
            'slug' => 'books-and-stationery',
        ]);
    }
}
