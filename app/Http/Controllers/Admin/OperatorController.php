<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Models\{Category, Operator, Service};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $operators = Operator::all();
            return view('admin.operator.crud.index', compact('operators'));
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
            $users = User::all();
            return view('admin.operator.crud.create', compact(['users']));
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

            $newOperator = Operator::create([
                'operator_name' => ucfirst(mb_convert_encoding($request->operator_name, 'UTF-8')),
                'description'   => ucfirst(mb_convert_encoding($request->description, 'UTF-8')),
                'email_corp'    => ucfirst(mb_convert_encoding($request->email_corp, 'UTF-8')),
                'phone_corp'    => ucfirst(mb_convert_encoding($request->phone_corp, 'UTF-8')),
                'address'       => ucfirst(mb_convert_encoding($request->address, 'UTF-8')),
                'user_id'       => ucfirst(mb_convert_encoding($request->user_id, 'UTF-8')),
            ]);

            $user = Operator::findOrFail($request->user_id);
            $user->assignRole('operador');

            return redirect()->route('operator.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $operator)
    {
        try {
            return view('admin.operator.crud.show', compact('operator'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        try {
            $users = User::all();
            return view('admin.operator.crud.edit', compact(['operator', 'users']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        try {

            $ope = Operator::findOrFail($operator->id);
            $ope->operator_name = ucfirst(mb_convert_encoding($request->operator_name, 'UTF-8'));
            $ope->description   = ucfirst(mb_convert_encoding($request->description, 'UTF-8'));
            $ope->email_corp    = ucfirst(mb_convert_encoding($request->email_corp, 'UTF-8'));
            $ope->phone_corp    = ucfirst(mb_convert_encoding($request->phone_corp, 'UTF-8'));
            $ope->address       = ucfirst(mb_convert_encoding($request->address, 'UTF-8'));
            $ope->user_id       = $request->user_id;
            $ope->save();

            $user = Operator::findOrFail($request->user_id);
            $user->assignRole('operador');

            return redirect()->route('operator.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateOperator(Request $request, Operator $operator)
    {
        try {

            $ope = Operator::findOrFail($operator->id);

            return redirect()->route('operator.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        try {

            $ope = Operator::findOrFail($operator->id);
            $ope->delete();
            return redirect()->route('operator.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function myInfo()
    {
        $operador = User::findOrFail(Auth::user()->id)->operator;
        return view('admin.operator.my-info', compact('operador'));
    }

    public function listReservations()
    {
        $myReservations = User::findOrFail(Auth::user()->id)->operator;
        return view('admin.operator.list-reservations', compact('myReservations'));
    }

    public function listServices()
    {
        $myServices = User::findOrFail(Auth::user()->id)->operator->services;
        return view('admin.operator.list-services', compact('myServices'));
    }

    public function crearServicio()
    {
        $categories = Category::all();
        return view('admin.operator.crearServicio', compact(['categories']));
    }

    public function guardarServicio(Request $request)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'operator_id' => 'required',
            'service_name' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->file('image')) {

            $folder = "/images/" . $this->tableName;
            $img = time() . '.' . $request->image->getClientOriginalExtension();
            $image = $folder . "/" . $img;
        } else {
            $image = null;
        }

        $data = [
            'category_id'       => $request->category_id,
            'operator_id'       => $request->operator_id,
            'service_name'      => mb_strtolower($request->service_name),
            'description'       => mb_strtolower($request->description),
            'what_to_expect'    => mb_strtolower($request->what_to_expect),
            'important_inf'     => mb_strtolower($request->important_inf),
            'additional_inf'    => mb_strtolower($request->additional_inf),
            'active'            => false,
            'price'             => null,
            'image'             => $image,
        ];

        $res = Service::create($data);

        if ($res) {
            if ($request->file('image')) {
                $request->image->move(public_path($folder), $img);
            }
            $message = ['success' => 'Servicio creada satisfactoriamente!'];
        } else {
            $message = ['errors' => 'No se pudo crear el servicio'];
        }

        return redirect()->route('listServices');
    }

    public function editarServicio(Service $service)
    {
        $categories = Category::all();
        return view('admin.operator.editarServicio', compact(['categories', 'service']));
    }

    public function actualizarServicio(Request $request, Service $service)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'operator_id' => 'required',
            'service_name' => 'required',
            'image' => 'image|mimes:jpeg,jpg|max:2048',
        ]);

        if ($request->file('image')) {

            $folder = "/images/" . $this->tableName;
            $img = time() . '.' . $request->image->getClientOriginalExtension();
            $image = $folder . "/" . $img;
        } else {
            $image = null;
        }

        $serv = Service::findOrFail($service->id);

        $serv->category_id      = $request->category_id;
        $serv->operator_id      = $request->operator_id;
        $serv->service_name     = mb_strtolower($request->service_name);
        $serv->description      = mb_strtolower($request->description);
        $serv->what_to_expect   = mb_strtolower($request->what_to_expect);
        $serv->important_inf    = mb_strtolower($request->important_inf);
        $serv->additional_inf   = mb_strtolower($request->additional_inf);
        $serv->active           = false;
        $serv->price            = null;
        $serv->image            = $image;

        $res = $serv->save();

        if ($res) {
            if ($request->file('image')) {
                $request->image->move(public_path($folder), $img);
                unlink(public_path() . $serv->image);
            }
            $message = ['success' => 'Servicio actualizado satisfactoriamente!'];
        } else {
            $message = ['errors' => 'No se pudo actualizar el servicio'];
        }

        return redirect()->route('listServices');
    }

    public function borrarServicio(Service $service)
    { }
}
