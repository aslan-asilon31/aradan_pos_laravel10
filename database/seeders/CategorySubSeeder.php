<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_subs')->insert([
            'cat_id' => '0',
            'name' => 'Clothing',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '0',
            'name' => 'Accessories (jewelry, handbags, etc.)',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '0',
            'name' => 'Shoes',
            'slug' => '',
        ]);

        DB::table('category_subs')->insert([
            'cat_id' => '1',
            'name' => 'Snacks',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '1',
            'name' => 'Homemade or artisanal food products',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '1',
            'name' => 'Beverages (local drinks, specialty teas, etc.)',
            'slug' => '',
        ]);



        DB::table('category_subs')->insert([
            'cat_id' => '2',
            'name' => 'Handmade decorations',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '2',
            'name' => 'Artisanal crafts',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '2',
            'name' => 'Traditional artwork',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '3',
            'name' => 'Home decor',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '3',
            'name' => 'Small furniture items',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '3',
            'name' => 'Bedding and linens',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '4',
            'name' => 'Handmade soaps and skincare products',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '4',
            'name' => 'Hair accessories',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '4',
            'name' => 'Natural beauty products',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '5',
            'name' => 'Handmade gadgets and accessories',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '5',
            'name' => 'Electronic accessories',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '5',
            'name' => 'Customized tech products',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '6',
            'name' => 'Handcrafted toys',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '6',
            'name' => 'Board games',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '6',
            'name' => 'Educational toys',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '7',
            'name' => 'Herbal teas and supplements',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '7',
            'name' => 'Handmade wellness products',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '7',
            'name' => 'Traditional medicines',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '8',
            'name' => 'Handmade jewelry',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '8',
            'name' => 'Custom-designed pieces',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '8',
            'name' => 'Traditional or cultural jewelry',
            'slug' => '',
        ]);


        DB::table('category_subs')->insert([
            'cat_id' => '9',
            'name' => 'Handmade notebooks and journals',
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '9',
            'name' => "Local authors' books",
            'slug' => '',
        ]);
        DB::table('category_subs')->insert([
            'cat_id' => '9',
            'name' => 'Stationery and office supplies',
            'slug' => '',
        ]);
    }
}
