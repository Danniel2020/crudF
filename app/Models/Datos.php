<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;

    protected $table = 'Dato';
    protected $primary = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'direccion',
        'cedula'
    ];



}
