<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        $dataPeminjaman = Peminjaman::get();
        return view('admin.peminjaman.index' , compact('dataPeminjaman'));
    }
}
