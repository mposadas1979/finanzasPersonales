<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'tipo'
    ];

     //Relacion de muchos a uno el modelo movimiento
    public function movimientos(){
        return $this->belongsTo(Movimiento::class);
    }

}
