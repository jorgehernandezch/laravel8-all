<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'root']);
        $role2 = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.user.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.destroy'])->syncRoles([$role1,$role2]);
    }
}
