<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CitaMedica extends Model
{
    use HasFactory;

    protected $fillable = ['estado','fecha','hora','id','idMedico','idPaciente'];

    public function medico(): HasOne
    {
        return $this->hasOne(Medico::class, 'id', 'idMedico');
    }
    public function paciente(): HasOne
    {
        return $this->hasOne(Paciente::class, 'id' ,'idPaciente');
    }
}
