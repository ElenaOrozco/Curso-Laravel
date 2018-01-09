<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
**MIGRACIONES
php artisan make:migration create_messages_table --create messages 


php artisan migrate

**ALTERAR BD
php artisan make:migration add_create_at_index_to_mensages_table --table mensages  

**CREAR MODELOS
php artisan make:model


**CREAR CONTROLLERS
php artisan make:controller Mensage

*/

Route::get('/', 'PagesController@home');


Route::get('/messages/{message}', 'MessagesController@show');

Route::post('/messages/create', 'MessagesController@create')
->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');


//Aquien sigue
Route::get('/{username}/follows', 'UsersController@follows');


//Quienes lo  siguen
Route::get('/{username}/follows', 'UsersController@follows');
//Route::get('/{username}/follows', 'UsersController@follows');

Route::get('/{username}', 'UsersController@show');


