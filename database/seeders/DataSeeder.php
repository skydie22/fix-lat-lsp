<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'Admin1',
            'fullname' => 'Admin Satu',
            'username' => 'Admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'join_date' => '2023-01-06',
            'foto' => '',
            'verif' => 'verified'
        ]);
        User::create([
            'kode' => 'AA001',
            'nis' => '112233',
            'fullname' => 'Ezhar Mahesa',
            'username' => 'ezhar',
            'password' => bcrypt('password'),
            'kelas' => 'XII RPL',
            'alamat' => 'jakarta',
            'role' => 'user',
            'join_date' => date('Y-m-d H:i:s'),
            'foto' => '',
            'verif' => 'verified',
        ]);

        User::create([
            'kode' => 'AA002',
            'nis' => '445566',
            'fullname' => 'Aldy Revigustian',
            'username' => 'aldy',
            'password' => bcrypt('password'),
            'kelas' => 'XII RPL',
            'alamat' => 'jakarta',
            'role' => 'user',
            'join_date' => date('Y-m-d H:i:s'),
            'foto' => '',
            'verif' => 'verified',
        ]);

        Kategori::create([
            'kode' => 'umum',
            'nama' => 'Umum'
        ]);
        Kategori::create([
            'kode' => 'sains',
            'nama' => 'Sains'
        ]);
        Kategori::create([
            'kode' => 'sejarah',
            'nama' => 'Sejarah'
        ]);

        Penerbit::create([
            'kode' => 'erlangga',
            'nama' => 'Erlangga'
        ]);
        Penerbit::create([
            'kode' => 'bukunesia',
            'nama' => 'Bukunesia'
        ]);
        Penerbit::create([
            'kode' => 'gramedia',
            'nama' => 'Gramedia'
        ]);


        Buku::create([
            'judul' => 'Cara meminum Ramune',
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'pengarang' => 'Aldy',
            'tahun_terbit' => '2022',
            'isbn' => '112233',
            'j_buku_baik' => 15,
            'j_buku_rusak' => 8,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Penelitian Meganthropus Anylotus',
            'kategori_id' => 2,
            'penerbit_id' => 2,
            'pengarang' => 'Aldy BudiAsih',
            'tahun_terbit' => '2022',
            'isbn' => '223344',
            'j_buku_baik' => 20,
            'j_buku_rusak' => 5,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Sejarah terbentuknya PKI',
            'kategori_id' => 3,
            'penerbit_id' => 3,
            'pengarang' => 'Aldy YGY',
            'tahun_terbit' => '2022',
            'isbn' => '556677',
            'j_buku_baik' => 30,
            'j_buku_rusak' => 10,
            'foto' => ''
        ]);

        // Peminjaman::create([
        //     'user_id' => 3,
        //     'buku_id' => 2,
        //     'tanggal_peminjaman' => '2023-01-06',
        //     'kondisi_buku_saat_dipinjam' => 'baik',
        //     'kondisi_buku_saat_dikembalikan' => 'rusak',
        //     'denda' => 100000
        // ]);

        // Peminjaman::create([
        //     'user_id' => 2,
        //     'buku_id' => 3,
        //     'tanggal_peminjaman' => '2023-01-06',
        //     'tanggal_pengembalian' => '2023-01-06',
        //     'kondisi_buku_saat_dipinjam' => 'baik',
        //     'kondisi_buku_saat_dikembalikan' => 'baik',
        // ]);

        // Peminjaman::create([
        //     'user_id' => 2,
        //     'buku_id' => 3,
        //     'tanggal_peminjaman' => '2023-01-01',
        //     'tanggal_pengembalian' => '2023-02-10',
        //     'kondisi_buku_saat_dipinjam' => 'baik',
        //     'kondisi_buku_saat_dikembalikan' => 'baik',
        //     'denda' => 0,
        // ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Balikin WOY',
            'isi' => 'Balikin Buku WOYY',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);
        
        Pesan::create([
            'pengirim_id' => 2,
            'penerima_id' => 1,
            'judul' => 'Balikin Kak',
            'isi' => 'Balikin plis bang',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Identitas::create([
            'nama_app' => 'E-Perpus SMKN 10',
            'alamat_app' => 'Jalan Jalan Sendiri :)',
            'email_app' => 'smkn10@perpus.com',
            'nomor_hp' => '081219019667',
            'foto' => ''
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang ada perbaikan server',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang ada penambahan data di database',
            'status' => 'aktif',
        ]);
    }
}
