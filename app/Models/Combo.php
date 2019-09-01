<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $fillable = [
        'name',
        'value',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo( Service::class );
    }
}
