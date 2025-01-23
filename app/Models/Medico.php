<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['id','idUsuario'];
    protected $nullable = ['celular','direccionConsultorio','especialidad','telefonoConsultorio'];

    public function horario(): HasOne
    {
        return $this->hasOne(HorarioAtencion::class, 'idMedico');
    }
}
