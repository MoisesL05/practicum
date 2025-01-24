<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['id','idUsuario'];
    protected $nullable = ['celular','direccionConsultorio','especialidad','telefonoConsultorio'];

    public function horario(): HasMany
    {
        return $this->hasMany(HorarioAtencion::class, 'idMedico');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
}
