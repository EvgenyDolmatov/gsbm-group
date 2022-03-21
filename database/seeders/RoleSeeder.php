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
        $superAdmin = Role::create([
            'name' => 'super-admin',
            'guard_name' => 'web',
        ]);
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        $superAdmin->syncPermissions(['manage service', 'manage course']);
        $admin->syncPermissions(['manage service', 'manage course']);
    }
}
