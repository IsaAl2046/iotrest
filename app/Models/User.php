<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     * aqui el ORM realiza el mapeo
     *fillable campos que vamos a utilizar
     *hidden campos que no se muestran
     * @var string[]
     */
    protected $fillable = [
        'id', 'username', 'password', 'rol'
    ];

    protected $hidden = [
        'password',
    ];
}
