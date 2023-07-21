<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'solicitud_id' ];

   // En el modelo Servicio
public function clientes()
{
    return $this->hasMany(Cliente::class);
}

}
