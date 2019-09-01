<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $tableName = "users";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $users = User::all();
            return view('admin.user.crud.index', compact(['users']));

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
        $roles = Role::all();
        return view('admin.user.crud.create', compact(['roles']));
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

            $dataValidate = [
                'nickname'  => 'required',
                'email'     => 'required|unique:users,email',
                'password'  => 'required|min:4',
                'cpassword' => 'required|min:4',
                'role'      => 'required',
            ];

            if ($request->password != $request->cpassword) {
                return redirect()->back()->with(['message'=>'Las contraseñas no coinciden']);
            }

            if (isset($request->image) && $request->image != '') {

                $folder = "/images/".$this->tableName;
                $img = time().'.'.$request->image->getClientOriginalExtension();
                $image = $folder."/".$img;

            } else {
                $image = null;
            }

            $data = [
                'first_name'        => mb_strtoupper( $request->first_name ),
                'second_name'       => mb_strtoupper( $request->second_name ),
                'paternal_lastname' => mb_strtoupper( $request->paternal_lastname ),
                'maternal_lastname' => mb_strtoupper( $request->maternal_lastname ),
                'dni_type'          => $request->dni_type,
                'dni_number'        => $request->dni_number,
                'phone'             => $request->phone,
                'nickname'          => mb_strtoupper( $request->nickname ),
                'email'             => mb_strtoupper( $request->email ),
                'password'          => bcrypt($request->password),
                'avatar_original'   => $image,
            ];

            $res = User::create( $data );

            $res->assignRole( $request->role );

            if ( $res ) {

                $message = ['success' => 'Usuario creada satisfactoriamente!'];
                if (isset($request->image) && $request->image != '') {
                    $request->image->move( public_path( $folder ), $img );
                }

            } else {
                $message = ['errors' => 'No se pudo crear el usuario'];
            }

            return redirect()->route('user.index')->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try {
            return view('admin.user.crud.show', compact(['user']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        try {
            $roles = Role::all();
            return view('admin.user.crud.edit', compact(['user', 'roles']));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {

            $dataValidate = [
                'nickname'  => 'required',
                'email'     => 'required|unique:users,email',
                'password'  => 'required|min:4',
                'cpassword' => 'required|min:4',
            ];

            if ($request->password != $request->cpassword) {
                return redirect()->back()->with(['message'=>'Las contraseñas no coinciden']);
            }

            if (isset($request->image) && $request->image != '') {

                $folder = "/images/".$this->tableName;
                $img = time().'.'.$request->image->getClientOriginalExtension();
                $image = $folder."/".$img;

            } else {
                $image = null;
            }

            $data = [
                'first_name'        => mb_strtoupper( $request->first_name ),
                'second_name'       => mb_strtoupper( $request->second_name ),
                'paternal_lastname' => mb_strtoupper( $request->paternal_lastname ),
                'maternal_lastname' => mb_strtoupper( $request->maternal_lastname ),
                'dni_type'          => $request->dni_type,
                'dni_number'        => $request->dni_number,
                'phone'             => $request->phone,
                'nickname'          => mb_strtoupper( $request->nickname ),
                'email'             => mb_strtoupper( $request->email ),
                'password'          => bcrypt($request->password),
                'avatar_original'   => $image,
            ];

            $updateUser = User::findOrFail( $user->id );
            $updateUser->fill( $data );
            $res = $updateUser->save();
            $user->assignRole( $request->role );

            if ( $res ) {

                $message = ['success' => 'Usuario actualizada satisfactoriamente!'];
                if (isset($request->image) && $request->image != '') {
                    $request->image->move( public_path( $folder ), $img );
                    unlink( public_path().$user->avatar_original );
                }

            } else {
                $message = ['errors' => 'No se pudo actualizar el usuario'];
            }

            return redirect()->route('user.index')->with( $message );

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {

            $u = User::findOrFail($user->id);

            if ($u->operator->count()>0) {
                $message = ['errors' => 'No se puede eliminar este usuario porque esta relacionada con otras tablas.'];
                return redirect()->route('user.index')->with( $message );
            }

            $u->delete();

            if ( $u ) {
                $message = ['success' => 'Usuario eliminado exitosamente.'];
                unlink( public_path().$user->avatar_original );
            }

            return redirect()->route('user.index');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function detail()
    {
        return view('admin.user.profileCustomer');
    }

    public function myReservas()
    {
        $myReservations = Auth::user()->reservations;
        return view('admin.reservation.reservasUser', compact(['myReservations']));
    }
}
