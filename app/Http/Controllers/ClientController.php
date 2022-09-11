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
        $kategori = Kategori::all();
        $tb = Berita::count();
        $ti = Informasi::count();
        //dd($kategori);
        return view('Client/index', compact('nama', 'tentang', 'alamat', 'tb', 'ti', 'desa', 'kategori'));
        
    }
    public function kategori($kategori)
    {

        $info = Berita::where('kategori', $kategori)->get();
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kateg = Kategori::where('kategori', $kategori)->first();;
        $kategori = Kategori::all();

        return view('Client/informasi', compact('nama','tentang','alamat', 'desa', 'info', 'kateg', 'kategori'));
    }
    public function tentang()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kategori = Kategori::all();

        return view('Client/tentang', compact('nama', 'tentang', 'alamat', 'desa', 'kategori'));

    }
    public function berita()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $berita = Berita::orderBy('id', 'DESC')->simplePaginate(3);
        $kategori = Kategori::all();

        $tag = Tag::all();
        $ps = Berita::orderBy('id', 'DESC')->limit(5)->get();
        return view('Client/berita', compact('nama', 'tentang', 'alamat', 'desa', 'berita', 'tag', 'ps', 'kategori'));
    }
    public function baca($id)
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $berita = Berita::find($id);
        $kategori = Kategori::all();

        $tag = Tag::all();
        $ps = Berita::orderBy('id', 'DESC')->limit(5)->get();
        $link = Kategori::where('kategori', $berita->kategori)->first();
        $tam = Berita::find($id)->update([
            'viewer' => $berita->viewer + 1
        ]);
        //dd($link->link);
        return view('Client/baca', compact('link','nama','tentang','alamat', 'desa', 'berita', 'tag', 'ps','kategori'));
    }
    public function informasi()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kateg = Kategori::all();
        $kategori = Kategori::all();

        $info = Informasi::orderBy('id', 'DESC')->simplePaginate(4);
        return view('Client/informasi', compact('nama','tentang','alamat', 'desa', 'info', 'kateg', 'kategori'));
    }
    public function kontak()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kateg = Kategori::all();
        $kategori = Kategori::all();

        return view('Client/kontak', compact('nama','tentang','alamat', 'desa', 'kateg', 'kategori'));
    }
    public function semua_informasi()
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $kateg = Kategori::all();
        $kategori = Kategori::all();

        $info = Informasi::orderBy('id', 'DESC')->simplePaginate(4);
        return view('Client/semua_informasi', compact('nama','tentang','alamat', 'desa', 'info', 'kateg', 'kategori'));
    }
    public function baca_info($id)
    {
        $nama = Aplikasi::first();
        $tentang = Tentang::first();
        $alamat = Alamat::first();
        $desa = Desa::first();
        $info = Informasi::find($id);
        $kategori = Kategori::all();

        $tam = Informasi::find($id)->update([
            'viewer' => $info->viewer + 1
        ]);
        return view('Client/baca_info', compact('nama','tentang','alamat', 'desa', 'info', 'kategori'));
    }
}
