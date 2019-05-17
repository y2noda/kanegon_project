<?php

use App\Income;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class IncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一括削除
        Income::truncate();

        //必要ならfaker利用
//        $faker = Faker::create('en_US');
        $faker = Faker::create('ja_JP');

        //必要ならループ（ここをFactory使う）
        for ($i = 0; $i < 10; $i++) {
            Income::create([
                'title' => $faker->title,
                'user_id'=>0,
                'price' => $faker->randomNumber(2),
                'paid_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}
