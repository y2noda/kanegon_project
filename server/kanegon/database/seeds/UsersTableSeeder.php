<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一括削除
        User::truncate();

        //特定のデータを追加
        User::create([
            'name' => 'test1',
            'email' => 'test1@test.com',
            'password' => Hash::make('testtest')
        ]);

        //必要ならfaker利用
        $faker = Faker::create('en_US');
        // $faker = Faker::create('ja_JP');

        //必要ならループ（ここをFactory使う）
        for($i = 0; $i < 10; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('testtest')
            ]);
        }

    }
}
