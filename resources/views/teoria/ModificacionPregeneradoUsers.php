<?php

/*
1. Comenzar con la migration
php artisan migrate make:migration add_username_andavarar_to_users_table --table users

2.Ir a la migracion y sobre escribir los metodos up y down

*/
//up
 $table->string('username')->unique();
            $table->string('avatar')->nullable();
        });
//Down