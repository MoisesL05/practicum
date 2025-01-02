<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['apellido','cedula','correo','estado','id','nombre','password','tipo','verificado'];
    protected $hidden = [ 'password'];
    protected $casts = [ 'password' => 'hashed', ];
}
