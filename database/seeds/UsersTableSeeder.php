<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $hashedPassword = Hash::make('admin123');

        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-02-09 12:42:53',
                'password' => $hashedPassword, // Menggunakan hashed password baru
                'remember_token' => 'EbrJUMkdZPGKaaZSnJsgooPS1gSl8R2zkX2FBCupEVZ4qnKLvvg3MGAdFROD',
                'settings' => null,
                'created_at' => '2020-02-09 12:42:53',
                'updated_at' => '2020-02-11 00:15:23',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'customer 1',
                'email' => 'customer@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'customer 2',
                'email' => 'customer2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => $hashedPassword,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => $hashedPassword,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
        ));
    }
}
