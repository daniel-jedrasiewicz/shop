<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = [
            'user_create',
            'user_edit',
            'user_show',
            'user_delete',
            'product_create',
            'product_edit',
            'product_show',
            'product_delete',
        ];


        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        foreach($adminPermissions as $permission)
        {
            $admin->givePermissionTo($permission);
        }

    }
}
