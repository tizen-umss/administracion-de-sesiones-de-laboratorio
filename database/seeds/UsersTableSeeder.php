<?php

use App\User;  //importamos tabla user
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
        //
        User::truncate(); //vaciar la tabla de usuarios

        //creamos un usuario
        $user = new User;
        $user->name = 'julian';
        $user->apPat = 'huarachi';
        $user->apMat = 'mamani';
        $user->ci = '7095167';
        $user->sis = '201100964';
        $user->email = 'jkazuo55@gmail.com';
        $user->password = bcrypt('holamundo');
        $user->save();

        $user = new User;
        $user->name = 'maria';
        $user->apPat = 'huayllucu';
        $user->apMat = 'escobar';
        $user->ci = '7095167';
        $user->sis = '201502152';
        $user->email = 'maria@gmail.com';
        $user->password = bcrypt('holamundo');
        $user->save();
    }
}
