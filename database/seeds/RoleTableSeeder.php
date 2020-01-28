<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name'         => 'super-admin',
                'display_name' => 'Super Admin',
                'description'  => 'Este es el rol super administrador',
            ]
        );

        Role::create(
            [
                'name'         => 'admin',
                'display_name' => 'Admin',
                'description'  => 'Este es el rol administrador',
            ]
        );

        Role::create(
            [
                'name'         => 'usuario',
                'display_name' => 'Usuario',
                'description'  => 'Este es el rol usuario',
            ]
        );
    }
}
