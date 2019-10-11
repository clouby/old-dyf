<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\{Combo, Reservation, Service, Shopping, Transfer, Dispotition};

class ShoppingController extends Controller
{
    public function carrito()
    {
        $shop = new Shopping;
        $token = Request()->session()->token();
        $myCart = $shop->getMyCart( $token );
        return view('demo.carrito', compact('myCart'));
    }

    public function addCartGastronomia(Request $request)
    {
        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $serv = Service::findOrFail( $service_id );

        $data = [
            'service_name'  => $serv->service_name,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => $reserv_start,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        if ( $serv->combo ) {
            
            $combo = Combo::findOrFail( $request->combo );
            $data = array_merge($data, ['quantity' => $combo->name]);
            $data = array_merge($data, ['price' => $combo->value]);

        } else {
            $adults = (int) $request->adults;
            $adults_pay = $adults * $serv->price_adult;
            $price = $adults_pay;
            $quantity = ($adults>1) ? $adults." adultos" : $adults." adulto" ;
            
            if ( $serv->kids_active ) {
                $kids = (int) $request->kids;
                if ($kids>0) {
                    $kids_pay = $kids * $serv->price_kids;
                    $price = $price + $kids_pay;
                    $quantity .= ($kids>1) ? ", ".$kids." niños" : ", ".$kids." niño" ;
                }
            }

            $data = array_merge($data, ['quantity' => $quantity]);
            $data = array_merge($data, ['price' => $price]);
        }

        Shopping::create( $data );
        return redirect()->route('shopping.cart');
    }

    public function addCartNautica(Request $request)
    {
        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $serv = Service::findOrFail( $service_id );

        $data = [
            'service_name'  => $serv->service_name,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => $reserv_start,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        if ( $serv->combo ) {
            
            $combo = Combo::findOrFail( $request->combo );
            $data = array_merge($data, ['quantity' => $combo->name]);
            $data = array_merge($data, ['price' => $combo->value]);

        } else {
            $adults = (int) $request->adults;
            $adults_pay = $adults * $serv->price_adult;
            $price = $adults_pay;
            $quantity = ($adults>1) ? $adults." adultos" : $adults." adulto" ;
            
            if ( $serv->kids_active ) {
                $kids = (int) $request->kids;
                if ($kids>0) {
                    $kids_pay = $kids * $serv->price_kyds;
                    $price = $price + $kids_pay;
                    $quantity .= ($kids>1) ? ", ".$kids." niños" : ", ".$kids." niño" ;
                }
            }

            $data = array_merge($data, ['quantity' => $quantity]);
            $data = array_merge($data, ['price' => $price]);
        }

        Shopping::create( $data );
        return redirect()->route('shopping.cart');
    }

    public function addCartIslas(Request $request)
    {
        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $serv = Service::findOrFail( $service_id );

        $data = [
            'service_name'  => $serv->service_name,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => $reserv_start,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        if ( $serv->combo ) {
            
            $combo = Combo::findOrFail( $request->combo );
            $data = array_merge($data, ['quantity' => $combo->name]);
            $data = array_merge($data, ['price' => $combo->value]);

        } else {
            $adults = (int) $request->adults;
            $adults_pay = $adults * $serv->price_adult;
            $price = $adults_pay;
            $quantity = ($adults>1) ? $adults." adultos" : $adults." adulto" ;
            
            if ( $serv->kids_active ) {
                $kids = (int) $request->kids;
                if ($kids>0) {
                    $kids_pay = $kids * $serv->price_kids;
                    $price = $price + $kids_pay;
                    $quantity .= ($kids>1) ? ", ".$kids." niños" : ", ".$kids." niño" ;
                }
            }

            $data = array_merge($data, ['quantity' => $quantity]);
            $data = array_merge($data, ['price' => $price]);
        }

        Shopping::create( $data );
        return redirect()->route('shopping.cart');
    }

    public function addCartTour(Request $request)
    {
        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $serv = Service::findOrFail( $service_id );

        $data = [
            'service_name'  => $serv->service_name,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => $reserv_start,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        if ( $serv->combo ) {
            
            $combo = Combo::findOrFail( $request->combo );
            $data = array_merge($data, ['quantity' => $combo->name]);
            $data = array_merge($data, ['price' => $combo->value]);

        } else {
            $adults = (int) $request->adults;
            $adults_pay = $adults * $serv->price_adult;
            $price = $adults_pay;
            $quantity = ($adults>1) ? $adults." adultos" : $adults." adulto" ;
            
            if ( $serv->kids_active ) {
                $kids = (int) $request->kids;
                if ($kids>0) {
                    $kids_pay = $kids * $serv->price_kids;
                    $price = $price + $kids_pay;
                    $quantity .= ($kids>1) ? ", ".$kids." niños" : ", ".$kids." niño" ;
                }
            }

            $data = array_merge($data, ['quantity' => $quantity]);
            $data = array_merge($data, ['price' => $price]);
        }

        Shopping::create( $data );
        return redirect()->route('shopping.cart');
    }

    public function addCartTransferTraslados(Request $request)
    {
        $validateData = $request->validate([
            'traslados'     => 'required',
            'reserv_start'  => 'required',
            'hour_out'      => 'required',
            'n_personas'    => 'required',
            'n_maletas'     => 'required',
        ]);

        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $traslados = $request->traslados;
        $personas = (int) $request->n_personas;
        $maletas = (int) $request->n_maletas;

        $service = Service::findOrFail( $service_id );

        if ($personas >= $maletas) {
            $max = $personas;
        } else {
            $max = $maletas;
        }

        $disp_vehiculo = Transfer::whereRaw('? between pax_min and pax_max', [$max])
                            ->where(function($tras) use($traslados){
                                $tras->where('traslados', $traslados);
                            })->first();

        $vehiculo    = $disp_vehiculo->precio_vehiculo;
        $guia        = $disp_vehiculo->precio_guia;
        $iva         = $disp_vehiculo->iva;
        $sub_guianza = $guia * ( $iva / 100 );

        $total       = $vehiculo + $sub_guianza;
        
        $quantity = ($personas>1) ? $personas." personas" : $personas." persona";

        if ($maletas>0) {
            $quantity .= ($maletas>1) ? ", ".$maletas." maletas" : ", ".$maletas." maleta" ;
        }

        $conditions = "Recomendado para este servicio es necesario un(a) "
                    .$disp_vehiculo->vehiculo.", teniendo un costo de "
                    .money($total, 'COP', TRUE)." ".currency('COP')
                    ." iva incluido, para ".$quantity." con traslado de ".$disp_vehiculo->traslados;

        $data = [
            'service_name'  => $service->service_name,
            'quantity'      => $quantity,
            'price'         => $total,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => NULL,
            'reserv_hour'   => $request->hour_out,
            'conditions'    => $conditions,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        $res = Shopping::create( $data );

        if ( $res ) {
            return redirect()->route('shopping.cart');
        } else {
            return redirect()->back();
        }
    }

    public function addCartTransferDisposiciones(Request $request)
    {
        $validateData = $request->validate([
            'reserv_start'  =>  'required',
            'hour_out'      =>  'required',
            'n_personas'    =>  'required',
            'n_maletas'     =>  'required',
            'horario'       =>  'required',
        ]);

        $temp_user = ( Auth::check() ) ? Auth::user()->id : $request->_token;
        $reserv_start = $request->reserv_start;
        $service_id = $request->service_id;

        $shop = Shopping::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('temp_user', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })->first();
        
        if ($shop) {
            $message = ['errors' => 'Ya cuenta con este servicio dentro del carrito de compra con la misma fecha'];
            return redirect()->back()->with( $message );
        }

        $reserv = Reservation::where('reserv_start', $reserv_start)
                        ->where( function($user) use($temp_user) {
                            $user->where('user_id', $temp_user);
                        })
                        ->where( function($service) use($service_id) {
                            $service->where('service_id', $service_id);
                        })
                        ->first();
        
        if ($reserv) {
            $message = ['errors' => 'Ya cuenta con una reserva para esta misma fecha, cancele su orden y vuelva a intentarlo'];
            return redirect()->back()->with( $message );
        }

        $horas = $request->horario;
        $personas = (int) $request->n_personas;
        $maletas = (int) $request->n_maletas;

        $service = Service::findOrFail( $service_id );

        if ($personas >= $maletas) {
            $max = $personas;
        } else {
            $max = $maletas;
        }

        $disp_vehiculo = Dispotition::whereRaw('? between pax_min and pax_max', [$max])
                            ->where(function($hour) use($horas){
                                $hour->where('horario', $horas);
                            })->first();

        $quantity = ($personas>1) ? $personas." personas" : $personas." persona";

        if ($maletas>0) {
            $quantity .= ($maletas>1) ? ", ".$maletas." maletas" : ", ".$maletas." maleta" ;
        }

        $conditions = "Recomendado para este servicio es necesario un(a) "
                    .$disp_vehiculo->vehiculo.", teniendo un costo de "
                    .money($disp_vehiculo->total, 'COP', TRUE)." ".currency('COP')
                    .", para ".$quantity;

        $data = [
            'service_name'  => $service->service_name,
            'quantity'      => $quantity,
            'price'         => $disp_vehiculo->total,
            'reserv_start'  => $reserv_start,
            'reserv_end'    => NULL,
            'reserv_hour'   => $request->hour_out,
            'conditions'    => $conditions,
            'temp_user'     => $temp_user,
            'service_id'    => $service_id,
        ];

        $res = Shopping::create( $data );

        if ( $res ) {
            return redirect()->route('shopping.cart');
        } else {
            return redirect()->back();
        }
    }

    public function destroy(Shopping $shopping)
    {
        $shopping->delete();
        return redirect()->route('shopping.cart');
    }

    public function vaciarCarro()
    {
        $token = Request()->session()->token();
        $temp_user = ( Auth::check() ) ? Auth::user()->id : $token;
        $myCart = Shopping::where('temp_user', $temp_user)->get();
        foreach ($myCart as $item) {
            $item->delete();
        }
        return redirect()->route('home');
    }

    public function registerUser(Request $request)
    {
        $validateData = $request->validate([
            'email'     => 'required|email|max:191',
            'password'  => 'required|min:4|max:16',
            'password2' => 'required|min:4|max:16',
        ]);

        $email = $request->email;
        $password = Hash::make( $request->password );

        $user = User::where('email', $email)->first();

        if ( User::where('email', $email)->first() ) {
            $user = User::where('email', $email)->first();
        } else {
            $user = User::create([
                'nickname'  => $email,
                'email'     => $email,
                'password'  => $password,
            ]);

            $user->assignRole('cliente');
        }

        $shop = new Shopping;
        $token = Request()->session()->token();
        $myItems = $shop->getMyCart( $token );

        foreach ($myItems as $item) {
            $updateItem = Shopping::findOrFail( $item->id );
            $updateItem->temp_user = $user->id;
            $updateItem->save();
        }

        Auth::login($user, true);
        return redirect()->route('shopping.cart');

    }

    public function token(Request $request, $token)
    {
        $urlapp = "https://secure.epayco.co/validation/v1/reference/".$token;
        
        // Initializing curl
        $ch = curl_init( $urlapp );

        // Configuring curl options
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-type: application/json'),
        );

        curl_setopt_array( $ch, $options );
        $result = curl_exec($ch);
        $response = json_decode( $result );

        $data = [
            'x_transaction_date'        => $response->data->x_transaction_date,
            'x_response'                => $response->data->x_response,
            'x_id_invoice'              => $response->data->x_id_invoice,
            'x_response_reason_text'    => $response->data->x_response_reason_text,
            'x_transaction_id'          => $response->data->x_transaction_id,
            'x_bank_name'               => $response->data->x_bank_name,
            'x_approval_code'           => $response->data->x_approval_code,
            'x_amount'                  => $response->data->x_amount,
            'x_currency_code'           => $response->data->x_currency_code,
        ];

        $data = (object) $data;

        $status = $response->data->x_cod_response;

        switch ($status) {
            case '1':

                $temp_user = (Auth::check()) ? Auth::user()->id : $request->session()->token();
                $myCartItems = Shopping::where('temp_user', $temp_user)->get();

                foreach ($myCartItems as $item) {
                    $reserva = Reservation::create([
                        'quantity'      => $item->quantity,
                        'reserv_start'  => $item->reserv_start,
                        'reserv_end'    => $item->reserv_end,
                        'status'        => 'Reservado',
                        'reserv_hour'   => $item->reserv_hour,
                        'conditions'    => $item->conditions,
                        'user_id'       => $item->temp_user,
                        'service_id'    => $item->service_id,
                    ]);

                    if ( $reserva ) {

                        $shop = Shopping::findOrFail( $item->id );
                        $shop->delete();

                        $servicio = Service::findOrFail( $item->service_id );

                        $dataOperator = [
                            'representante'     => $servicio->operator->user->first_name.' '.$servicio->operator->user->paternal_lastname,
                            'operator_email'    => $servicio->operator->email_corp,
                        ];

                        $dataResponse = [
                            // Datos del comprador
                            'factura'           => $response->data->x_id_invoice,
                            'fullname'          => $response->data->x_customer_name.' '.$response->data->x_customer_lastname,
                            'phone'             => $response->data->x_customer_movil,
                            'email'             => $response->data->x_customer_email,
                            // Datos dl servicio
                            'service'           => $servicio->service_name,
                            'quantity'          => $reserva->quantity,
                            'status'            => $reserva->status,
                            'reserv_hour'       => $reserva->reserv_hour,
                            'reserv_start'      => $reserva->reserv_start,
                            'reserv_end'        => $reserva->reserv_end,
                            // Datos del operador
                            'representante'     => $servicio->operator->user->first_name.' '.$servicio->operator->user->paternal_lastname,
                            'operator'          => $servicio->operator->operator_name,
                            'operator_email'    => $servicio->operator->email_corp,
                            'operator_phone'    => $servicio->operator->phone_corp,
                            'operator_address'  => $servicio->operator->address,
                            'total'             => $item->price,
                        ];

                        $email_operador = $servicio->operator->email_corp;
                        $nombre_operador = $servicio->operator->operator_name;

                        // Correo personalizado para el usuario final.
                        Mail::send('emails.cliente', $dataResponse, function ($message) use($response) {
                            $message->subject('¡Compra exitosa!');
                            $message->from('hola@dealyourfun.com', 'Deal Your Fun');
                            $message->to($response->data->x_customer_email, $response->data->x_customer_name.' '.$response->data->x_customer_lastname);
                        });

                        // Correo personalizado para el operador del servicio.
                        Mail::send('emails.operador', $dataResponse, function ($message) use($response, $dataOperator) {
                            $message->subject('¡Nueva compra!');
                            $message->from('hola@dealyourfun.com', 'Deal Your Fun');
                            $message->to($dataOperator['operator_email'], $dataOperator['representante']);
                        });

                        // Correo personalizado para el administrador de la plataforma DyF.
                        Mail::send('emails.dyf', $dataResponse, function ($message) use($response) {
                            $message->subject('Reserva confirmada');
                            $message->from('hola@dealyourfun.com', 'Deal Your Fun');
                            $message->to('it@dealyourfun.com', 'Administrador DyF');
                        });

                    }
                }

                return view('static.pages.epaycoAceptada', compact('data'));

                break;

            case '2':
                
                return view('static.pages.epaycoRechazada', compact('data'));
                
                break;

            case '3':
                
                return view('static.pages.epaycoPendiente', compact('data'));

                break;

            case '4':
                
                return view('static.pages.epaycoFallida', compact('data'));

                break;
            
            default:
                # code...
                break;
        }
    }
}
