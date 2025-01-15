<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticable implements MustVerifyEmail
{
    use HasFactory;

    protected $fillable = ['apellido','cedula','correo','estado','id','nombre','password','tipo','verificado'];
    protected $hidden = [ 'password'];
    protected $casts = [ 'password' => 'hashed', ];
}
