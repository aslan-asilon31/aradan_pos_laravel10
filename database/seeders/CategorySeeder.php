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
        DB::table('categories')->insert([
            'cat_id' => '0',
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '1',
            'name' => 'Food and Beverage',
            'slug' => 'food-and-beverage',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '2',
            'name' => 'Handicrafts',
            'slug' => 'handicrafts',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '3',
            'name' => 'Home and Living',
            'slug' => 'home-and-living',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '4',
            'name' => 'Beauty and Personal Care',
            'slug' => 'beautify-and-personal-care',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '5',
            'name' => 'Tech and Electronics',
            'slug' => 'tech-and-electronics',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '6',
            'name' => 'Toys and Games',
            'slug' => 'toys-and-games',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '7',
            'name' => 'Health and Wellness',
            'slug' => 'health-and-wellness',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '8',
            'name' => 'Jewelry',
            'slug' => 'jewelry',
        ]);

        DB::table('categories')->insert([
            'cat_id' => '9',
            'name' => 'Books and Stationery',
            'slug' => 'books-and-stationery',
        ]);
    }
}
