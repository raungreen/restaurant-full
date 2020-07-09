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
    }
}
