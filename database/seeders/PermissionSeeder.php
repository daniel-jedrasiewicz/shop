<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

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
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'product_create',
            'product_edit',
            'product_show',
            'product_delete',
            'product_create',
        ];

        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }

    }
}
