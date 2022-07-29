<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'name'      => 'Admin',
                'slug'      => 'admin',
                'created_at' => '2022-09-15 06:09:29',
                'updated_at' => '2022-09-15 06:09:29',
            ],
            [
                'id'         => 2,
                'name'      => 'User',
                'slug'      => 'user',
                'created_at' => '2022-09-15 06:09:29',
                'updated_at' => '2022-09-15 06:09:29',
            ],
        ];

        Role::insert($roles);
    }
}
