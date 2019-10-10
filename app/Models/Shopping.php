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

    public function services()
    {
        return $this->hasMany(Service::class, 'id', 'service_id');
    }

    public function getMyCart($token)
    {
        $temp_user = (Auth::check()) ? Auth::user()->id : $token;
        $myCart = Shopping::where('temp_user', '12')->get();

        $shoppingCarts = $myCart->map(function ($shopping) {

            $shopObj = Shopping::find(
                (int) $shopping->id
            );

            $shop = $shopObj->first();

            $service = $shopObj->services()->first();
            return (object) compact('shop', 'service');

        });

        return $shoppingCarts;
    }
}
