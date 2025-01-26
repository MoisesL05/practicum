<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Usuario extends Authenticable implements MustVerifyEmail
{
    use Notifiable;
    use HasFactory;

    protected $fillable = ['apellido','cedula','correo','estado','id','nombre','password','tipo','verificado'];
    protected $hidden = [ 'password'];
    protected $casts = [ 'password' => 'hashed', ];

    public function medico(): HasOne
    {
        return $this->hasOne(Medico::class, 'idUsuario');
    }
    public function operador(): HasOne
    {
        return $this->hasOne(Operador::class, 'idUsuario');
    }
    public function paciente(): HasOne
    {
        return $this->hasOne(Paciente::class, 'idUsuario');
    }
}
