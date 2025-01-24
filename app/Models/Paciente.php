<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['id','idUsuario'];
    protected $nullable = ['celular','celularContactoEmergencia','contactoEmergencia','direccion'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
}
