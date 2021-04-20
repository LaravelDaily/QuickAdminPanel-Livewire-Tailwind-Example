<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 23,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 28,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 29,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 30,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 31,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 32,
                'title' => 'transaction_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
