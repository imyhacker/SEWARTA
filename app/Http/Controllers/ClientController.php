<?php

namespace App\Http\Controllers;

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

        $tb = Berita::count();
        $ti = Informasi::count();
        return view('Client/index', compact('nama', 'tentang', 'alamat', 'tb', 'ti'));
    }
}
