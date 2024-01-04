<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Clothing',
            'slug' => '',
        ]);
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Accessories',
            'slug' => '',
        ]);
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Shoes',
            'slug' => '',
        ]);


        
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Shoes',
            'slug' => '',
        ]);
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Shoes',
            'slug' => '',
        ]);
        $category = \App\Models\Category::factory()->create([
            'cat_id' => '1',
            'name' => 'Shoes',
            'slug' => '',
        ]);
    }
}
