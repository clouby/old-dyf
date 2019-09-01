<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Models\{Service, Operator};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.user.profileAdmin');
    }

    public function finanzas()
    {
        return view('admin.user.profileFinanza');
    }

    public function moderador()
    {
        return view('admin.user.profileModerator');
    }

    public function operator()
    {
        $user = User::findOrFail( Auth::user()->id );
        $operator = $user->operator;
        $services = $operator->services;
        return view('admin.user.profileOperator', compact(['operator', 'services']));
    }

    public function cliente()
    {
        return view('admin.user.profileCustomer');
    }
}
