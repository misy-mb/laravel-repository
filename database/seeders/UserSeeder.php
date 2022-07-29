<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
                'remember_token' => null,
                'created_at'     => '2022-09-15 06:09:29',
                'updated_at'     => '2022-09-15 06:09:29',
            ],
            [
                'id'             => 2,
                'name'           => 'User',
                'email'          => 'user@gmail.com',
                'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
                'remember_token' => null,
                'created_at'     => '2022-09-15 06:09:29',
                'updated_at'     => '2022-09-15 06:09:29',
            ],
        ];

        User::insert($users);
    }
}
