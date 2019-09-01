<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = [
        'hour',
        'service_id'
    ];

    public function service()
    {
        return $this->belongsTo( Service::class );
    }
}
