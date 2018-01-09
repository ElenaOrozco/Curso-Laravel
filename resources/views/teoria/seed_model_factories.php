<?php
/*

1. Ir a database/factories/ModelFactory

2. Debajo de lo que hay crear la difinicion

$factory->define(clase, funcionAnomimaRecibeFaker)
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar' => $faker->imageUrl(300, 300, 'people'),
    ];
});

$factory->define(App\Message::class, function(Faker\Generator $faker){

	//Aqui se genera la info de prueba
	//retorna un array
	return [
		'content' => $faker->realText(random_int(20,160)),
		'image' => $faker->imageUrl(600, 338),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
	];
	
});

/*
3.Probar desde consola: verificar que tengamos en composer.json tinker y en congig/app.php  en package Service Providers
 -Poner comando php artisan tinker
 -$message = factoty(App\Message::class)->make() // Crea un message   o

 -$message = factoty(App\Message::class)->create() // Crea un message en BD  

 4. Para correrlo DataBase/seeds/DataBaseSeeders
 Escribir en run
 poner en consola php artisan db:seed
 para regenerar php artisan migrate:refresh --seed

/*
	//Crea 50 usuarios
// $this->call(UsersTableSeeder::class);
        /*factory(App\User::class, 50)
            ->create()
            ->each(function(App\User $user){
                factory(App\Message::class)
                ->times(20)
                ->create([
                    'user_id' =>$user->id,
                ]);
            });*/


        //Crea 50 usuarios
        $users = factory(App\User::class, 50)->create();


        $users->each(function(App\User $user) use ($users){
                factory(App\Message::class)
                ->times(20)
                ->create([
                    'user_id' =>$user->id,
                ]);

                $user->follows()->sync(
                    //Da 10 usuarios al azar para seguir
                    $users->random(10)

                );
            });

