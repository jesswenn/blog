<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;

    // Here is going to inheirith
    // all functionalities lika has role etc.
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // A user have can have many posts
    // With this line we can use searten
    // querys element that wouldnt be availble
    public function posts(){
        // return $this->hasMany(Post::class);
        return $this->hasMany('App\Post');
    }

    // setPasswordAttribute set the encryption in DB
     public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
}
