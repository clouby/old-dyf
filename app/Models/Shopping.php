<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Pasarela;
use Auth;

class Shopping extends Model
{
    protected $fillable = [
        'service_name',
        'quantity',
        'price',
        'reserv_start',
        'reserv_end',
        'reserv_hour',
        'conditions',
        'temp_user',
        'service_id',
    ];

    public function getMyCart($token)
    {
        $temp_user = (Auth::check()) ? Auth::user()->id : $token;   
        $myCart = Shopping::where('temp_user', $temp_user)->get();
        return $myCart;
    }

    public function pagoCard()
    {
        
    }
}
