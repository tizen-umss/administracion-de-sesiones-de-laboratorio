# sistema administracion de sesiones de laboratorio

CONFIGURATION

1. git clone https://github.com/tizen-umss/administracion-de-sesiones-de-laboratorio.git

2. cd administracion-de-sesiones-de-laboratorio

3. composer install

4. //config file .env 

        cp .env.example .env
        In file .env edit next lines

        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=tizendb
        DB_USERNAME=tizen
        DB_PASSWORD=tizensrll

        comands for create user and database in postgres
        CREATE USER tizen WITH password 'tizensrl'
        CREATE DATABASE tizendb WITH OWNER tizen;

5. php artisan migrate

6. php artisan key:generate

7. php artisan serve
