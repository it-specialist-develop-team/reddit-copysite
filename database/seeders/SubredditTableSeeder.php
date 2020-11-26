<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubredditTableSeeder extends Seeder
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

        // ランダムにsubredditsを作成
        for ($i = 0; $i < 10; $i++){
            DB::table('subreddits')->insert([
                'id' => $i+1,
                'category_id' => $faker->numberBetween($min = 0, $max = 9),
                'subreddit_name' => $faker->name,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
                'deleted_at' => $faker->dateTime(),
            ]);
        }
    }
}
