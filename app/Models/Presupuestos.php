<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuestos extends Model
{

    protected $fillable = [
        'user_id',
        'categoria_id',
        'monto_asignado',
        'monto_gastado',
        'mes',
        'anio',
    ];

    public function USER(){
        return $this-> belongsTo(User::class);
    }

    public function categoria(){
        return $this-> belongsTo(Categorias::class);
    }
    //
}
