<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateRolesAndPermissions extends Migration
{
    public function up()
    {
        //Role 
        $adminRole = Role::create(['name' => 'admin']);
        $gestionnaireRole = Role::create(['name' => 'gestionnaire']);
        $rddRole = Role::create(['name' => 'RDD']);
        $smRole = Role::create(['name' => 'SM']);

        //Permission
        $createUserPermission = Permission::create(['name' => 'create user']);
        $adminRole->givePermissionTo($createUserPermission);

        $createRequestPermission = Permission::create(['name' => 'create request']);
        $gestionnaireRole->givePermissionTo($createRequestPermission);

        $lookRequestPermission = Permission::create(['name' => 'look request']);
        $rddRole->givePermissionTo($lookRequestPermission);

        $validateRequestPermission = Permission::create(['name' => 'validate request']);
        $smRole->givePermissionTo($validateRequestPermission);
    }

    public function down()
    {
        // Supprimer les rôles et les autorisations
    }
}