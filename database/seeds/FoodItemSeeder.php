<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Our thick n hearty burger on a toasted bakery bun. Served with lettuce, tomato, onion and pickles. Served with classic fries.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Our thick n hearty burger on a toasted bakery bun. Served with lettuce, tomato, onion and pickles. Served with classic fries.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Our thick n hearty burger on a toasted bakery bun. Served with lettuce, tomato, onion and pickles. Served with classic fries.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Spicy bone in meaty wing',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 8.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Country Fried Steak',
            'description' => 'Fried steak with homemade gravy.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 19.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cesar Salad',
            'description' => 'with chicken strips.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 12.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Cherry Cheesecake',
            'description' => 'with real cherries.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 7.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Dr Pepper',
            'description' => 'all Coke products.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'all Coke products.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Crown Royal',
            'description' => 'all Coke products.',
            'image_url' => '/img/salad-Transparent.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
