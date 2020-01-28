<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuarios
        Permission::create(
            [
                'name'         => 'usuario.index',
                'display_name' => 'Navegar los usuarios',
                'table'        => 'usuarios',
                'description'  => 'Lista y navega todos los usuarios del sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'usuario.show',
                'display_name' => 'Detalle del usuario',
                'table'        => 'usuarios',
                'description'  => 'Ve en detalle cada usuario del sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'usuario.create',
                'display_name' => 'Crear usuarios',
                'table'        => 'usuarios',
                'description'  => 'Podría crear nuevos usuarios en el sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'usuario.edit',
                'display_name' => 'Modificar usuarios',
                'table'        => 'usuarios',
                'description'  => 'Podría modificar cualquier dato de un usuario del sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'usuario.destroy',
                'display_name' => 'Eliminar usuarios',
                'table'        => 'usuarios',
                'description'  => 'Podría eliminar cualquier usuario del sistema',
            ]
        );

        //Roles
        Permission::create(
            [
                'name'         => 'rol.index',
                'display_name' => 'Navegar los roles',
                'table'        => 'roles',
                'description'  => 'Lista y navega todos los roles del sistema',
            ]
        );
        Permission::create(
            [
                'name'         => 'rol.show',
                'display_name' => 'Detalle del rol',
                'table'        => 'roles',
                'description'  => 'Ve en detalle cada rol del sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'rol.create',
                'display_name' => 'Crear roles',
                'table'        => 'roles',
                'description'  => 'Podría crear nuevos roles en el sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'rol.edit',
                'display_name' => 'Modificar roles',
                'table'        => 'roles',
                'description'  => 'Podría modificar cualquier dato de un rol del sistema',
            ]
        );

        Permission::create(
            [
                'name'         => 'rol.destroy',
                'display_name' => 'Eliminar roles',
                'table'        => 'roles',
                'description'  => 'Podría eliminar cualquier rol del sistema',
            ]
        );
    }
}
