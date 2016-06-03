<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\EntrustPermission;
use Zizaco\Entrust\HasRole;
use Chatty\Plus\Users\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  //   public function run()
  //   {
  //     Role::firstOrCreate([
  //       'name' => 'admin',
  //       'display_name' => 'Plus Admin',
  //       'description' => 'Administrator for all users',
  //     ]);
  //
  //     $superadmin = Role::where('name','=','admin_role_name')->first();
  //     $shrek = User::where('username','=','shrek77')->first();
  //
  //     if (!$shrek->hasRole('admin_role_name')) {
  //       $joe->attachRole( $superadmin->id );
  //     }
  //
  //     $this->command->info('Admin user seeded :-)');
  // }
}
