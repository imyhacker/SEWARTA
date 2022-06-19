<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Alamat;
use App\Models\Berita;
use App\Models\Tentang;
use App\Models\Aplikasi;
use App\Models\Informasi;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();

        $tb = Berita::count();
        $ti = Informasi::count();
        return view('Client/index', compact('nama', 'tentang', 'alamat', 'tb', 'ti', 'desa'));
    }
    public function tentang()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();

        return view('Client/tentang', compact('nama', 'tentang', 'alamat', 'desa'));

    }
    public function berita()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $berita = Berita::orderBy('id', 'DESC')->simplePaginate(3);
        return view('Client/berita', compact('nama', 'tentang', 'alamat', 'desa', 'berita'));
    }
}
