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
use App\Models\Pesan;
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
   Route::get('/pesan/masuk', [PesanController::class , 'indexMasuk'])->name('user.pesan.masuk');
   Route::post('/pesan/masuk/ubah_status', [PesanController::class , 'updateStatus'])->name('user.pesan.masuk.update');
   Route::get('/pesan/terkirim', [PesanController::class , 'indexTerkirim'])->name('user.pesan.terkirim');
   Route::post('/pesan/kirim' , [PesanController::class, 'kirimPesan'])->name('user.pesan.kirim');
   Route::get('/profile', [ProfileController::class , 'index'])->name('user.profile');
   Route::put('/profile/update/' , [ProfileController::class , 'update'])->name('user.profile.update');
});

Route::prefix('admin')->middleware(['auth' , 'role:admin'])->group(function () {
   Route::get('/dashboard' , [AdminDashboardController::class, 'index'])->name('admin.dashboard');
   Route::get('/penerbit' , [PenerbitController::class, 'index'])->name('admin.data.penerbit');
   Route::get('/anggota' , [UserController::class, 'indexAnggota'])->name('admin.data.anggota');
   Route::post('/anggota/add' , [UserController::class , 'storeAnggota'])->name('admin.add.anggota');
   Route::put('/anggota/update/{id}' , [UserController::class, 'updateAnggota'])->name('admin.update.anggota');
   Route::delete('/anggota/delete/{id}' , [UserController::class , 'destroyAnggota'])->name('admin.delete.anggota');
   Route::get('/administrator' , [UserController::class , 'indexAdmin'])->name('admin.data.admin');
   Route::post('/administrator/add' , [UserController::class , 'storeAdmin'])->name('admin.add.admin');
   Route::delete('/administrator/delete/{id}' , [UserController::class , 'destroyAdmin'])->name('admin.delete.admin');

   Route::get('/datapeminjaman' , [AdminPeminjamanController::class , 'index'])->name('admin.data.peminjaman');

   Route::get('/databuku' , [BukuController::class , 'index'])->name('admin.data.buku');
   Route::get('/kategoribuku' , [KategoriController::class, 'index'])->name('admin.kategori.buku');
   Route::get('/pesan/masuk' , [PesanController::class, 'indexAdminMasuk'])->name('admin.pesan.masuk');
   Route::get('/pesan/terkirim' , [PesanController::class, 'indexAdminterkirim'])->name('admin.pesan.terkirim');
   Route::post('/pesan/masuk/Ubah_status' , [PesanController::class , 'updateStatusAdmin'])->name('admin.pesan.masuk.update');

});
