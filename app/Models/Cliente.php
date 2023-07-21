<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion', 'telefono', 'solicitud_id'];

   // En el modelo Cliente
public function servicio()
{
    return $this->belongsTo(Servicio::class);
}

}
