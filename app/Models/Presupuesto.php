<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto extends Model
{
    protected $fillable = [
        'user_id',
        'categoria_id',
        'monto_asignado',
        'monto_gastado',
        'mes',
        'anio',
    ];

    // Relacion de mucho a uno con el modelo user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relacion de mucho a uno con el modelo categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
