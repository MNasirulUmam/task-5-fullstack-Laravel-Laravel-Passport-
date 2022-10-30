<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@laravel.com',
                'password' => bcrypt('12345678'),
                'photo' => 'storage/img/man.png',
                'level_id' => '1',
            ],
            [
                'username' => 'irul',
                'email' => 'irul@laravel.com',
                'password' => bcrypt('12345678'),
                'photo' => 'storage/img/man.png',
                'level_id' => '2',
            ],
            [
                'username' => 'anu',
                'email' => 'anu@laravel.com',
                'password' => bcrypt('12345678'),
                'photo' => 'storage/img/man.png',
                'level_id' => '2',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
