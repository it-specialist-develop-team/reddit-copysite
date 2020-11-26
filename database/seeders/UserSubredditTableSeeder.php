<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSubredditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fakerを使う
        $faker = \Faker\Factory::create('ja_JP');

        // ランダムにuser_subreddit_linksを作成
        for ($i = 0; $i < 40; $i++){
            DB::table('user_subreddit_links')->insert([
                'id' => $i+1,
                'user_id' => $faker->numberBetween($min = 1, $max = 21),
                'subreddit' => $faker->numberBetween($min = 1, $max = 10),
                'role' => $faker->numberBetween($min = 0, $max = 9),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
                'deleted_at' => $faker->dateTime(),
            ]);
        }
    }
}
