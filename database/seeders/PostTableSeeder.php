<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fakerを使う
        $faker = \Faker\Factory::create('ja_JP');

        // ランダムに記事を作成
        for ($i = 0; $i < 40; $i++)
        {
            DB::table('posts')->insert([
                'title' => $faker->text(20),
                'body' => $faker->text(200),
                'subreddit_id' => $faker->numberBetween(1,7),
                'user_id' => $faker->numberBetween(1, 20),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
