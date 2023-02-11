<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleBuilderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create(['name' => 'admin']);
        $admin_permission = Permission::create(['name' => 'complete access']);

        $admin_role->givePermissionTo($admin_permission);

        $member_role = Role::create(['name' => 'member']);
        $member_permission = Permission::create(['name' => 'partial access']);

        $member_role->givePermissionTo($member_permission);
    }
}
