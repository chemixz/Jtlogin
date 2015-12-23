<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class UserTableSeeder extends Seeder {
    public function run(){
       User::create(array(
            'username'  => 'chemixz',
            'email'     => 'm3taljose@gmail.com',
            'name'=> 'jose miguel',
            'password' => Hash::make('2351310') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}
