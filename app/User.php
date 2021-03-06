<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as Authenticatablerait;
use Illuminate\Contracts\Auth\Authenticatable;
use Moloquent\Eloquent\Model as Eloquent;




class User extends Eloquent implements Authenticatable
{
    use Authenticatablerait;
    use Notifiable;

    protected  $connection='mongodb';

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
