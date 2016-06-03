<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Chatty\Permissions\Role;
use Chatty\Permissions\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


         $this->call('PermissionSeeder');
         $this->command->info('Permission seeds finished.'); // show information in the c

        Model::reguard();
    }
}

  /*
  * Role Seeder
  */
 class RoleSeeder extends Seeder
 {

   public function run()
   {
         Model::unguard();

         // $this->call(UserTableSeeder::class);
         DB::table('roles')->delete();

         $roles = array(
             ['name' => 'admin', 'display_name' => 'Plus Admin', 'description' => 'Administrator for all users'],
             ['name' => 'user', 'display_name' => 'Normal User', 'description' => 'Ordinary user account'],
             ['name' => 'company', 'display_name' => 'Company', 'description' => 'Company account'],
         );

         // Loop through each user above and create the record for them in the database
         foreach ($roles as $role)
         {
             Role::create($role);
         }

         Model::reguard();
   }
 }

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      DB::table('permissions')->delete();

      $permissions = array(
          #Create
          ['name' => 'create_user', 'display_name' => 'Create user', 'description' => 'All users'],
          ['name' => 'create_company', 'display_name' => 'Create Company', 'description' => 'Create company'],
          ['name' => 'create_post', 'display_name' => 'Create Post', 'description' => 'Create Post'],
          ['name' => 'create_product', 'display_name' => 'Create Product', 'description' => 'Create Product'],
          ['name' => 'create_service', 'display_name' => 'Create Service', 'description' => 'Create Service'],
          ['name' => 'create_comment', 'display_name' => 'Create Comment', 'description' => 'Create Comment'],
          ['name' => 'create_like', 'display_name' => 'Create Like', 'description' => 'Create Like'],
          ['name' => 'create_message', 'display_name' => 'Create Message', 'description' => 'Create Message'],
          ['name' => 'create_collection', 'display_name' => 'Create Collection', 'description' => 'Create Collection'],

          #Edit
          ['name' => 'edit_company', 'display_name' => 'Edit Company', 'description' => 'Edit Company'],
          ['name' => 'edit_user', 'display_name' => 'Edit user', 'description' => 'Edit user'],
          ['name' => 'edit_post', 'display_name' => 'Edit post', 'description' => 'Edit post'],
          ['name' => 'edit_product', 'display_name' => 'Edit product', 'description' => 'Edit product'],
          ['name' => 'edit_service', 'display_name' => 'Edit service', 'description' => 'Edit service'],
          ['name' => 'edit_comment', 'display_name' => 'Edit comment', 'description' => 'Edit comment'],
          ['name' => 'edit_message', 'display_name' => 'Edit message', 'description' => 'Edit message'],
          ['name' => 'edit_collection', 'display_name' => 'Edit Collection', 'description' => 'Edit Collection'],

          #Delete
          ['name' => 'delete_user', 'display_name' => 'Delete user', 'description' => 'Delete user'],
          ['name' => 'delete_company', 'display_name' => 'Delete company', 'description' => 'Delete company'],
          ['name' => 'delete_post', 'display_name' => 'Delete post', 'description' => 'Delete post'],
          ['name' => 'delete_product', 'display_name' => 'Delete product', 'description' => 'Delete product'],
          ['name' => 'delete_service', 'display_name' => 'Delete service', 'description' => 'Delete service'],
          ['name' => 'delete_comment', 'display_name' => 'Delete comment', 'description' => 'Delete comment'],
          ['name' => 'delete_message', 'display_name' => 'Delete message', 'description' => 'Delete message'],
          ['name' => 'delete_collection', 'display_name' => 'Delete collection', 'description' => 'Delete collection'],

          #Share
          ['name' => 'share_collection', 'display_name' => 'Share Collection', 'description' => 'Share Collection'],

          #Add Relationship
          ['name' => 'follow_user', 'display_name' => 'Follow User', 'description' => 'Follow User'],
          ['name' => 'follow_company', 'display_name' => 'Follow Company', 'description' => 'Follow Company'],
          ['name' => 'add_customer', 'display_name' => 'Add Customer', 'description' => 'Add Customer'],

          #Remove Relationship
          ['name' => 'delete_customer', 'display_name' => 'Delete Customer', 'description' => 'Delete Customer'],
          ['name' => 'unfollow_user', 'display_name' => 'Unfollow User', 'description' => 'Company account'],
          ['name' => 'unfollow_company', 'display_name' => 'Unfollow Company', 'description' => 'Company account'],

      );

      // Loop through each user above and create the record for them in the database
      foreach ($permissions as $permission)
      {
          Permission::create($permission);
      }

      Model::reguard();

    }

}
