<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Billys Burger',
            'logo_image_url' => '/img/restaurant-logo-5.png',
            'address_1' => '2619 1/2 Cherokee St',
            'address_2' => '',
            'city' => 'St. Louis',
            'state' => 'MO',
            'zipcode' => '63118',
            'phone_number' => '347-836-5748',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
