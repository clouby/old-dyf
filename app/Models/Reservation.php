<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'quantity',
        'reserv_start',
        'reserv_end',
        'status',
        'reserv_hour',
        'conditions',
        'user_id',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo( Service::class );
    }

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }
}
