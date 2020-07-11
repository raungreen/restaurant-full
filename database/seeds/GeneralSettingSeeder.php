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
            'address_1' => '234 State Street',
            'address_2' => '',
            'city' => 'St. Louis',
            'state' => 'MO',
            'zipcode' => '63104',
            'phone_number' => '347-836-5748',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
