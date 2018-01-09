<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'avatar','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relaciones --un usuario tiene muchos mensajes --
    public function messages(){
        return $this->hasMany(Message::class)->orderBy('created_at', 'desc');
    }


    //Que usuarios sigo    belongsToMany   tabla, foreingn key y related  --buscar los que yo sigo--
    public function follows(){
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'followed_id');
    }

    //Que usuarios me siguen  
    public function followers(){
        return $this->belongsToMany(User::class, 'followers', 'followed_id', 'user_id');
    }



}
