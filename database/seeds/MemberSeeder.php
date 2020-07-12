<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('members')->insert([
            'fname' => $faker->firstName,
            'lname' => $faker->lastName,
            'email' => $faker->email,
            'phone_number' => $faker->phoneNumber,
            'updated_at' => $faker->dateTimeThisMonth,
            'created_at' => $faker->dateTimeThisMonth
        ]);
    }
}
