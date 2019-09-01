<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Operator, Service, Category};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    protected $tableName = "services";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $services = Service::with(['operator', 'category'])->get();
            return view('admin.service.crud.index', compact(['services']));
        
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $categories = Category::all();
            $operators = Operator::all();
            return view('admin.service.crud.create', compact(['operators', 'categories']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
            $validateData = $request->validate([
                'category_id'   => 'required',
                'operator_id'   => 'required',
                'service_name'  => 'required',
                'principal'     => 'image|mimes:jpeg,jpg,png|max:2048',
                'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            ]);

            if ($request->file('principal')) {
                $folderP = "/images/".$this->tableName."/principal";
                $imgP = time().'.'.$request->principal->getClientOriginalExtension();
                $imageP = $folderP."/".$imgP;
            } else {
                $imageP = null;
            }

            if ($request->file('image')) {
                $folder = "/images/".$this->tableName;
                $img = time().'.'.$request->image->getClientOriginalExtension();
                $image = $folder."/".$img;
            } else {
                $image = null;
            }

            $data = [
                'category_id'       => $request->category_id,
                'operator_id'       => $request->operator_id,
                'service_name'      => ucfirst( mb_convert_encoding( $request->service_name, 'UTF-8' ) ),
                'description'       => ucfirst( mb_convert_encoding( $request->description, 'UTF-8'  ) ),
                'what_to_expect'    => ucfirst( mb_convert_encoding( $request->what_to_expect, 'UTF-8' ) ),
                'important_inf'     => ucfirst( mb_convert_encoding( $request->important_inf, 'UTF-8' ) ),
                'additional_inf'    => ucfirst( mb_convert_encoding( $request->additional_inf, 'UTF-8' ) ),
                'price_adult'       => $request->price_adult,
                'price_boy'         => $request->price_boy,
                'boy_active'        => $request->boy_active,
                'active'            => $request->active,
                'combo'             => $request->combo,
                'principal'         => $imageP,
                'image'             => $image,
            ];

            $res = Service::create( $data );

            if ( $res ) {
                if ($request->file('principal')) {
                    $request->principal->move( public_path( $folderP ), $imgP );
                }
                if ($request->file('image')) {
                    $request->image->move( public_path( $folder ), $img );
                }
                $message = ['success' => 'Servicio creada satisfactoriamente!'];
            } else {
                $message = ['errors' => 'No se pudo crear el servicio'];
            }

            return redirect()->route('service.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        try {
            return view('admin.service.crud.show', compact(['service']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        try {
            $categories = Category::all();
            $operators = Operator::all();
            return view('admin.service.crud.edit', compact(['service', 'operators', 'categories']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        try {
            
            $validateData = $request->validate([
                'category_id'   => 'required',
                'operator_id'   => 'required',
                'service_name'  => 'required',
                'principal'     => 'image|mimes:jpeg,jpg,png|max:2048',
                'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            ]);

            $serv = Service::findOrFail($service->id);

            $serv->category_id      = $request->category_id;
            $serv->operator_id      = $request->operator_id;
            $serv->service_name     = ucfirst( mb_convert_encoding( $request->service_name, 'UTF-8' ) );
            $serv->description      = ucfirst( mb_convert_encoding( $request->description, 'UTF-8' ) );
            $serv->what_to_expect   = ucfirst( mb_convert_encoding( $request->what_to_expect, 'UTF-8' ) );
            $serv->important_inf    = ucfirst( mb_convert_encoding( $request->important_inf, 'UTF-8' ) );
            $serv->additional_inf   = ucfirst( mb_convert_encoding( $request->additional_inf, 'UTF-8' ) );
            $serv->price_adult      = $request->price_adult;
            $serv->price_boy        = $request->price_boy;
            $serv->boy_active       = $request->boy_active;
            $serv->active           = $request->active;
            $serv->combo            = $request->combo;

            if ($request->file('principal')) {
            
                $folderP = "/images/".$this->tableName."/principal";
                $imgP = "principal_".time().'.'.$request->principal->getClientOriginalExtension();
                $imageP = $folderP."/".$imgP;

                $serv->principal = $imageP;
            }

            if ($request->file('image')) {
            
                $folder = "/images/".$this->tableName;
                $img = "service_".time().'.'.$request->image->getClientOriginalExtension();
                $image = $folder."/".$img;

                $serv->image = $image;
            }

            $serv->save();

            if ( $serv ) {
                if ($request->file('principal')) {
                    $request->principal->move( public_path( $folderP ), $imgP );

                    if (@getimagesize( public_path().$service->principal )) {
                        unlink( public_path().$service->principal );
                    }
                }
                if ($request->file('image')) {
                    $request->image->move( public_path( $folder ), $img );

                    if (@getimagesize( public_path().$service->principal )) {
                        unlink( public_path().$service->image );
                    }
                }
                $message = ['success' => 'Servicio actualizado satisfactoriamente!'];
            } else {
                $message = ['errors' => 'No se pudo actualizar el servicio'];
            }

            return redirect()->route('service.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        try {

            $serv = Service::findOrFail($service->id);
            $serv->delete();
            return redirect()->route('service.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function status(Service $service)
    {
        $serv = Service::findOrFail( $service->id );
        if ( $serv->active ) {
            $serv->active = false;
        } else {
            $serv->active = true;
        }
        $serv->save();

        return redirect()->back();
    }
}
