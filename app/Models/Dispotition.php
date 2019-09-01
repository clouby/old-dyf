<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispotition extends Model
{
    protected $fillable = [
        'horario',
        'vehiculo',
        'total',
        'pax_min',
        'pax_max',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo( Service::class );
    }
}
