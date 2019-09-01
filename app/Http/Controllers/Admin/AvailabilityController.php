<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Availability, Service};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.availability.crud.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin.availability.crud.create', compact(['services']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'hour'       => 'required',
            'service_id' => 'required',
        ]);

        $service = Service::findOrFail($request->service_id);
        Availability::create($data);
        return redirect()->route('horariosService', $service);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function show(Availability $availability)
    {
        return view('admin.availability.crud.show', compact(['availability']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function edit(Availability $availability)
    {
        return view('admin.availability.crud.edit', compact(['availability']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Availability $availability)
    {
        $data = $request->validate([
            'hour'       => 'required',
            'service_id' => 'required',
        ]);

        $service = Service::findOrFail($request->service_id);
        $availability->fill($data);
        $availability->save();
        return redirect()->route('horariosService', $service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Availability $availability)
    {
        $service = Service::findOrFail($availability->service_id);
        $availability->delete();
        return redirect()->route('horariosService', $service);
    }

    public function horariosService(Service $service)
    {
        return view('admin.availability.horariosService', compact(['service']));
    }

    public function horariosServiceCreate(Service $service)
    {
        return view('admin.availability.horariosServiceCreate', compact(['service']));
    }
}
