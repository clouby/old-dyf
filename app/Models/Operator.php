<?php

namespace App\Models;

use Auth;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = [
        'operator_name',
        'description',
        'email_corp',
        'phone_corp',
        'address',
        'latitude',
        'longitude',
        'user_id',
    ];

    public function images()
    {
        return $this->morphMany( Image::class, 'imageable');
    }

    public function services()
    {
        return $this->hasMany( Service::class );
    }

    public function user()
    {
        return $this->belongsTo( User::class );
    }

    public function reservations()
    {
        return $this->hasManyThrough(Reservation::class, Service::class);
    }
}
