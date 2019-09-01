<?php

namespace App;

use Epayco\Epayco;
use Illuminate\Database\Eloquent\Model;

class Pasarela extends Model
{
    protected $pasarela;

    public function __construct()
    {
        $this->pasarela = new Epayco(array(
            "apiKey" => env('EPAYCO_PUBLIC_APIKEY'),
            "privateKey" => env('EPAYCO_SECRET_APIKEY'),
            "lenguage" => "ES",
            "test" => true
        ));
    }

    public function get()
    {
        $customers = $this->pasarela->customer->get('567899');
        
        return $customers;
    }
}
