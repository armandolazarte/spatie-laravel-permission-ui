<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armando = User::create(
            [
                'name'              => 'Lazarte, Armando',
                'email'             => 'armando@gmail.com',
                'email_verified_at' => now(),
                'password'          => '123456',
                'tipo'              => 'super-admin',
                'remember_token'    => Str::random(10),
            ]
        );

        $usuario = User::create(
            [
                'name'              => 'Usuario, Prueba',
                'email'             => 'usuario@gmail.com',
                'email_verified_at' => now(),
                'password'          => '123456',
                'remember_token'    => Str::random(10),
            ]
        );

        $armando->assignRole('super-admin');
        $usuario->assignRole('usuario');

        //factory(User::class, 100)->create();
    }
}
