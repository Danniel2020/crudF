<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'Registro';
    protected $primary = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'apellido',
        'genero',
        'telefono',
        'comuna',
        'barrio',
        'direccion',
        'fechaNacimineto',
        'municipio',
        'numeroPlanilla',
        'correoElectronico',
        'ocupacion',
        'digitador'


    ];


}
