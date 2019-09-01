<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'traslados',
        'vehiculo',
        'precio_vehiculo',
        'precio_guia',
        'pax_min',
        'pax_max',
        'iva',
        'capacidad_maleta',
        'duracion',
        'entrada_atraccion',
        'almuerzo_tipico',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo( Service::class );
    }
}
