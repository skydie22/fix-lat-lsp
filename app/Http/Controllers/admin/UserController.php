<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexAnggota()
    {

        $anggota = User::where('role' , 'user')->get();
        return view('admin.anggota.index' , compact('anggota'));
    }

    public function indexAdmin()
    {
        $admin = User::where('role' , 'admin')->get();   
        return view('admin.admin.index' , compact('admin'));
    }
}
