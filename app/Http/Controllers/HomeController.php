<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Alamat;
use App\Models\Berita;
use App\Models\Tentang;
use App\Models\Aplikasi;
use App\Models\Informasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aplikasi = Aplikasi::first();
        $nama_desa = Desa::first();
       
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();

        
        $tb = Berita::count();
        $ti = Informasi::count();

        return view('Dashboard/index', compact('aplikasi', 'nama_desa', 'nama', 'tentang', 'alamat', 'tb', 'ti'));
    }
}
