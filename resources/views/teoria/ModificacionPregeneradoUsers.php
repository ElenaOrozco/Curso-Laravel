<?php

/*
1. Comenzar con la migration
php artisan make:migration add_username_andavarar_to_users_table --table users

2.Ir a la migracion y sobre escribir los metodos up y down

3. Correr la migracion
php artisan migrate

*/
//up
 $table->string('username')->unique();
            $table->string('avatar')->nullable();
        });
//Down

  $table->dropColumn('username');
            $table->dropColumn('avatar');
