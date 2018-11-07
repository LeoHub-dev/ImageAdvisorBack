<?php

use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\Permission;

class RoleAndPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Role::truncate();
        //Permission::truncate();

        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $addAdmin = new Permission();
        $addAdmin->name         = 'add-admin';
        $addAdmin->display_name = 'Add admin'; // optional
        // Allow a user to...
        $addAdmin->description  = 'Add admin users'; // optional
        $addAdmin->save();

        $listUsers = new Permission();
        $listUsers->name         = 'list-users';
        $listUsers->display_name = 'List users'; // optional
        // Allow a user to...
        $listUsers->description  = 'See all the registered users'; // optional
        $listUsers->save();

        $editUsers = new Permission();
        $editUsers->name         = 'edit-users';
        $editUsers->display_name = 'Edit Users'; // optional
        // Allow a user to...
        $editUsers->description  = 'edit existing users'; // optional
        $editUsers->save();

        $owner->attachPermissions(array($addAdmin, $listUsers, $editUsers));
        $admin->attachPermissions(array($listUsers, $editUsers));
    
    }
}
