<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexRiwayat()
    {
        $peminjaman = Peminjaman::where('user_id' , Auth::user()->id)->get();
        return view('user.riwayat_peminjaman' , compact('peminjaman'));
    }

    public function indexForm()
    {
        $buku = Buku::all();
        return view('user.form_peminjaman' , compact('buku'));
    }

    public function form(Request $request)
    {
        $buku = Buku::all();
        $buku_id = $request->buku_id;

        return view('user.form_peminjaman' , compact('buku' , 'buku_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create($request->all());

        if ($peminjaman) {
            return redirect()->route('user.form.peminjaman')->with('status' , 'success')->with('msg' , 'berhasil menambah data');
        }
        return redirect()->back()->with('status', 'danger')->with('msg' , 'gagal menambah data');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
