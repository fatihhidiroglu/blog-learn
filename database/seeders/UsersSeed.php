<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i < 100; $i++) {
        DB::table('users')->insert([
          'name'=>$faker->name,
          'email'=>$faker->email,
          'age'=>rand(18,60),
          'gender'=>rand(1,2),
          'password'=>md5($faker->password),
        ]);
      }
    }
}
