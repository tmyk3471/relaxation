<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kawakami',
            'email' => 'kawakami@gmail.com',
            'role_id' => '1',  //管理者
            'password' => 'kawakami'
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'role_id' => '2',  //登録ユーザー
            'password' => 'user1'
        ]);
        DB::table('users')->insert([
            'name' => 'shop1',
            'email' => 'shop1@gmail.com',
            'role_id' => '3',  //無料掲載店舗
            'password' => 'shop1'
        ]);
    }
}
