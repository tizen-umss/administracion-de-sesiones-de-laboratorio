<?php

use App\User;  //importamos tabla user
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //limpiamos la tabla rol
        // Role::truncate();

        // User::truncate(); //vaciar la tabla de usuarios

        //creamos el rol admin
        $adminRole = Role::create(['name' => 'Admin']);
        $docenteRole = Role::create(['name' => 'Docente']);

        $admin = new User;
        $admin->name = 'maria';
        $admin->apPat = 'huayllucu';
        $admin->apMat = 'escobar';
        $admin->ci = '7095167';
        $admin->sis = '201502152';
        $admin->email = 'maria@gmail.com';
        $admin->password = bcrypt('holamundo');
        $admin->save();
        //le asignamos el rol
        $admin->assignRole($adminRole);

        //creamos un usuario
        $docente = new User;
        $docente->name = 'julian';
        $docente->apPat = 'huarachi';
        $docente->apMat = 'mamani';
        $docente->ci = '7095167';
        $docente->sis = '201100964';
        $docente->email = 'jkazuo55@gmail.com';
        $docente->password = bcrypt('holamundo');
        $docente->save();

        $docente->assignRole($docenteRole);

        
    }
}
