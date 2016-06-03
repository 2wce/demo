<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Chatty\Permissions\Role;
use Chatty\Permissions\Permission;

class UserRoleSeeder extends Seeder
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

      $role = Role::where('name','=', 'user')->first();
      $permission = Permission::all();
      $user_permission = $permission->except('create_user','delete_user', 'edit_user');
      dd($user_permission->all());
      $role->attachPermissions($user_permission->toArray());

      Model::reguard();
    }
}
