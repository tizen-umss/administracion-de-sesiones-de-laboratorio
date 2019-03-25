<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //desabilitamos las llaves foraneas
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::statement('ALTER TABLE role_has_permissions DISABLE TRIGGER ALL;');
        // DB::statement('ALTER TABLE roles DISABLE TRIGGER ALL;');
        DB::statement('TRUNCATE TABLE role_has_permissions RESTART IDENTITY CASCADE');
        // DB::statement('TRUNCATE role_has_permissions, roles RESTART IDENTITY CASCADE;');
        // DB::statement('SET session_replication_role = replica;');
        // DB::statement('TRUNCATE "roles" restart identity;');
        
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        DB::statement('TRUNCATE TABLE role_has_permissions RESTART IDENTITY CASCADE');

        // DB::statement('SET session_replication_role = DEFAULT;');
        // DB::statement('ALTER TABLE role_has_permissions roles ENABLE TRIGGER ALL;');
        
        //los volvemos a habilitar
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
