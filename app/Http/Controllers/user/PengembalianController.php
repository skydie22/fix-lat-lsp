<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    public function index()
    {
        $judul = Peminjaman::where('user_id' , Auth::user()->id)
                            ->where('tanggal_pengembalian' , null)
                            ->get();
        return view('user.form_pengembalian' , compact('judul'));
    }

    public function riwayatPengembalian()
    {
        $pengembalian = Peminjaman::where('user_id' , Auth::user()->id)->get();
        return view('user.riwayat_pengembalian'  , compact('pengembalian'));
    }

    public function store(Request $request)
    {
        $cek = Peminjaman::where('user_id' , $request->user_id)
                        ->where('buku_id' , $request->buku_id)
                        ->first();

        $cek->update([
            'tanggal_pengembalian'  => $request->tanggal_pengembalian,
            'kondisi_buku_saat_dikembalikan' => $request->kondisi_buku_saat_dikembalikan
        ]);

        if ($request->kondisi_buku_saat_dikembalikan == 'baik') {
            $buku = Buku::where('id' , $request->buku_id)->first();

            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik + 1

            ]);

            $cek->update([
                'denda' => 0
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'rusak') {
            $buku = Buku::where('id' , $request->buku_id)->first();

            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1

            ]);

            $cek->update([
                'denda' => 20000
            ]);
        }

        if ($request->kondisi_buku_saat_dikembalikan == 'hilang') {
            $cek->update([
                'denda' => 200000
            ]);
        }

        return redirect()->route('user.riwayat.pengembalian');
    }
}
