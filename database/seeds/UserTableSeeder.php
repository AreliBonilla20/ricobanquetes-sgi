<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Administrador')->first();
        $role_tactico = Role::where('name', 'Tactico')->first();
        $role_estrategico = Role::where('name', 'Estrategico')->first();

        $user = new User();
        $user->name = "Administrador";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = "Director";
        $user->email = "tactico@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_tactico);
        
        $user = new User();
        $user->name = "Jefe";
        $user->email = "estrategico@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_estrategico);
        

    }
}
