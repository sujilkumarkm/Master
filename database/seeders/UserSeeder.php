<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,15) as $index)
        DB::table('users')->insert([
            'name' => $faker->name(5),
            'email' => $faker->email(7),
            'password' => $faker->password(10)
        ]);
    }
}
