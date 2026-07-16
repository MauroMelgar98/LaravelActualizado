<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //Indica que datos que campos se llenan de manera masiva
    protected $Fillable = [
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'correo',
        'direccion'
    ];

    
}
