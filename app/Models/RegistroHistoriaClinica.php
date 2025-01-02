<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroHistoriaClinica extends Model
{
    use HasFactory;

    protected $fillable = ['diagnostico','fecha','id','idHistoria','idMedico','sintomas','tratamiento'];
}
