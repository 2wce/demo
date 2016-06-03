<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Chatty\Permissions\Role;
use Chatty\Permissions\Permission;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('permission_role')->delete();

        $role = Role::where('name','=', 'admin')->first();
        $permission = Permission::all()->toArray();

        $role->attachPermissions($permission);

        Model::reguard();
    }
}
