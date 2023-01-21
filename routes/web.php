<?php

use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\PeminjamanController as AdminPeminjamanController;
use App\Http\Controllers\admin\PenerbitController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PeminjamanController;
use App\Http\Controllers\user\PengembalianController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Middleware\Role;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('user')->middleware(['auth' , 'role:user'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
   Route::get('/peminjaman/riwayat', [PeminjamanController::class , 'riwayatPeminjaman'])->name('user.riwayat.peminjaman');
   Route::get('/form_peminjaman' , [PeminjamanController::class , 'indexForm'])->name('user.form.peminjaman');
   Route::post('/form_peminjaman' , [PeminjamanController::class , 'form']);
   Route::post('/peminjaman/submit' , [PeminjamanController::class , 'store'])->name('submit.peminjaman');
   Route::get('/pengembalian', [PengembalianController::class , 'index'])->name('user.pengembalian');
   Route::get('/pengembalian/riwayat' , [PengembalianController::class , 'riwayatPengembalian'])->name('user.riwayat.pengembalian');
   Route::post('/pengembalian/submit' , [PengembalianController::class , 'store'])->name('submit.pengembalian');
   Route::get('/pesan', [PesanController::class , 'index'])->name('user.pesan');
   Route::get('/profile', [ProfileController::class , 'index'])->name('user.profile');
   Route::put('/profile/update/' , [ProfileController::class , 'update'])->name('user.profile.update');
});

Route::prefix('admin')->middleware(['auth' , 'role:admin'])->group(function () {
   Route::get('/dashboard' , [AdminDashboardController::class, 'index'])->name('admin.dashboard');
   Route::get('/penerbit' , [PenerbitController::class, 'index'])->name('admin.data.penerbit');
   Route::get('/anggota' , [UserController::class, 'indexAnggota'])->name('admin.data.anggota');
   Route::get('/administrator' , [UserController::class , 'indexAdmin'])->name('admin.data.admin');
   Route::get('/datapeminjaman' , [AdminPeminjamanController::class , 'index'])->name('admin.data.peminjaman');

   Route::get('/databuku' , [BukuController::class , 'index'])->name('admin.data.buku');
   Route::get('/kategoribuku' , [KategoriController::class, 'index'])->name('admin.kategori.buku');
});
