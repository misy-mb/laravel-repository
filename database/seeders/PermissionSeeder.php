<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'name'      => 'user_management_access',
                'slug'      => 'user-management-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '2',
                'name'      => 'permission_create',
                'slug'      => 'permission-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '3',
                'name'      => 'permission_edit',
                'slug'      => 'permission-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '4',
                'name'      => 'permission_show',
                'slug'      => 'permission-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '5',
                'name'      => 'permission_delete',
                'slug'      => 'permission-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '6',
                'name'      => 'permission_access',
                'slug'      => 'permission-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '7',
                'name'      => 'role_create',
                'slug'      => 'role-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '8',
                'name'      => 'role_edit',
                'slug'      => 'role-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '9',
                'name'      => 'role_show',
                'slug'      => 'role-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '10',
                'name'      => 'role_delete',
                'slug'      => 'role-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '11',
                'name'      => 'role_access',
                'slug'      => 'role-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '12',
                'name'      => 'user_create',
                'slug'      => 'user-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '13',
                'name'      => 'user_edit',
                'slug'      => 'user-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '14',
                'name'      => 'user_show',
                'slug'      => 'user-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '15',
                'name'      => 'user_delete',
                'slug'      => 'user-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '16',
                'name'      => 'user_access',
                'slug'      => 'user-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '17',
                'name'      => 'client_management_setting_access',
                'slug'      => 'client-management-setting-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '18',
                'name'      => 'slider_create',
                'slug'      => 'slider-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '19',
                'name'      => 'slider_edit',
                'slug'      => 'slider-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '20',
                'name'      => 'slider_show',
                'slug'      => 'slider-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '21',
                'name'      => 'slider_delete',
                'slug'      => 'slider-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '22',
                'name'      => 'slider_access',
                'slug'      => 'slider-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '23',
                'name'      => 'category_create',
                'slug'      => 'category-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '24',
                'name'      => 'category_edit',
                'slug'      => 'category-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '25',
                'name'      => 'category_show',
                'slug'      => 'category-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '26',
                'name'      => 'category_delete',
                'slug'      => 'category-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '27',
                'name'      => 'category_access',
                'slug'      => 'category-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '28',
                'name'      => 'post_access',
                'slug'      => 'post-access',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '29',
                'name'      => 'post_show',
                'slug'      => 'post-show',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '30',
                'name'      => 'post_create',
                'slug'      => 'post-create',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '31',
                'name'      => 'post_edit',
                'slug'      => 'post-edit',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
            [
                'id'         => '32',
                'name'      => 'post_delete',
                'slug'      => 'post-delete',
                'created_at' => '2022-09-15 06:10:05',
                'updated_at' => '2022-09-15 06:10:05',
            ],
        ];

        Permission::insert($permissions);
    }
}
