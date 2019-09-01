<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Service};

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.image.crud.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service)
    {

        return view('admin.image.crud.create', compact('service'));
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
            
            $validateDate = $request->validate([
                'url'           => 'required|image|mimes:jpeg,jpg|max:2048',
                'service_id'    => 'required',
            ]);

            $folder = "/images/services/galery";
            $img = time().'.'.$request->url->getClientOriginalExtension();
            $image = $folder."/".$img;

            $service = Service::findOrFail( $request->service_id );
            $newImage = $service->images()->create([
                'url' => $image,
            ]);

            if ($newImage) {
                $request->url->move( public_path( $folder ), $img );    
                $message = ['success' => 'Imagen subida satisfactoriamente!'];
            } else {
                $message = ['errors' => 'No se pudo subir la imagen'];
            }

            return redirect()->route('service.show', $service)->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.image.crud.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('admin.image.crud.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $validateDate = $request->validate([
            'url'           => 'required|image|mimes:jpeg,jpg|max:2048',
            'service_id'    => 'required',
        ]);

        $folder = "/images/services/galery";
        $name = time().'.'.$request->url->getClientOriginalExtension();
        $image_name = $folder."/".$name;

        $img = Image::findOrFail( $request->id );
        $update = $img->url = $image_name;

        if ( $update ) {
            $request->url->move( public_path( $folder ), $name );
            unlink( public_path().$image->url );    
            $message = ['success' => 'Imagen actualizada satisfactoriamente!'];
        } else {
            $message = ['errors' => 'Error al actualizar imagen'];
        }

        return redirect()->route('formGalery')->with( $message );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();

        if (@getimagesize( public_path().$image->url )) {
            unlink( public_path().$image->url );
        }
    }
}
