<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$role = Role::findByName('super-admin');

        $permissions = Permission::all()->pluck('id', 'id');

        $role->syncPermissions($permissions);*/

        DB::table('role_has_permissions')->insert(
            [
                [
                    'permission_id' => 1,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 2,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 3,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 4,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 6,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 7,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 8,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 9,
                    'role_id'       => 2,
                ],
                [
                    'permission_id' => 1,
                    'role_id'       => 3,
                ],
                [
                    'permission_id' => 2,
                    'role_id'       => 3,
                ],
                [
                    'permission_id' => 6,
                    'role_id'       => 3,
                ],
                [
                    'permission_id' => 7,
                    'role_id'       => 3,
                ],
            ]
        );
    }
}
