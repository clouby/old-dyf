<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Combo, Service};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.combo.crud.index');
    }

    public function comboPerService(Service $service)
    {
        return view('admin.combo.comboPerService', compact(['service']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.combo.crud.create', compact(['services']));
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

            $data = $request->validate([
                'service_id'    => 'required|numeric',
                'name'          => 'required',
                'value'         => 'required|numeric',
            ]);

            $service = Service::findOrFail( $request->service_id );
            $res = Combo::create( $data );

            return redirect()->route('comboPerService', $service);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Combo $combo)
    {
        return view('admin.combo.crud.show', compact(['combo']));
    }

    public function comboCreatePerService(Service $service)
    {
        return view('admin.combo.comboCreatePerService', compact(['service']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Combo $combo)
    {
        return view('admin.combo.crud.edit', compact(['combo']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combo $combo)
    {
        $service = Service::findOrFail( $combo->service->id );
        $combo->name = $request->name;
        $combo->value = $request->value;
        $combo->save();

        return redirect()->route('comboPerService', $service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combo $combo)
    {
        $service = Service::findOrFail( $combo->service->id );
        $combo->delete();
        return redirect()->route('comboPerService', $service);
    }
}
