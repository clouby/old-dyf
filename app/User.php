<?php

namespace App;

use App\Models\{Operator, Reservation, Service};
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'second_name',
        'paternal_lastname',
        'maternal_lastname',
        'dni_type',
        'dni_number',
        'phone',
        'nickname',
        'email',
        'password',
        'provider_id',
        'provider_name',
        'avatar',
        'avatar_original',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reservations()
    {
        return $this->hasMany( Reservation::class );
    }

    public function operator()
    {
        return $this->hasOne( Operator::class );
    }
}
