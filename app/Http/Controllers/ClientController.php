<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Desa;
use App\Models\Alamat;
use App\Models\Berita;
use App\Models\Tentang;
use App\Models\Aplikasi;
use App\Models\Informasi;
use App\Models\Kategori;
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

        $tag = Tag::all();
        $ps = Berita::orderBy('id', 'DESC')->limit(5)->get();
        return view('Client/berita', compact('nama', 'tentang', 'alamat', 'desa', 'berita', 'tag', 'ps'));
    }
    public function baca($id)
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $berita = Berita::find($id);
        
        $tag = Tag::all();
        $ps = Berita::orderBy('id', 'DESC')->limit(5)->get();

        $tam = Berita::find($id)->update([
            'viewer' => $berita->viewer + 1
        ]);
        return view('Client/baca', compact('nama','tentang','alamat', 'desa', 'berita', 'tag', 'ps'));
    }
    public function informasi()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kateg = Kategori::all();
        
        $info = Informasi::orderBy('id', 'DESC')->simplePaginate(4);
        return view('Client/informasi', compact('nama','tentang','alamat', 'desa', 'info', 'kateg'));
    }
    public function baca_info($id)
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $info = Informasi::find($id);
        
        $tam = Informasi::find($id)->update([
            'viewer' => $info->viewer + 1
        ]);
        return view('Client/baca_info', compact('nama','tentang','alamat', 'desa', 'info'));
    }
}
