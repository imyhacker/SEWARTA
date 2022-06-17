<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Berita;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function berita()
    {
        $data = Berita::orderBy('id', 'DESC')->get();
        $data2 = Tag::all();
        return view('Dashboard/berita/index', compact('data', 'data2'));
    }
    public function upload_berita(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tag'   => 'required',
            'isi'   => 'required',
            'gambar_berita' => 'required|mimes:jpeg,jpg,png,svg'
        ]);
        $gambar = $request->file('gambar_berita');
        $nama_file = $gambar->getClientOriginalName();
        $path = 'gambar_berita';
        $gambar->move($path, $nama_file);
        $data = Berita::create([
            'judul' => $request->judul,
            'tag'   => $request->tag,
            'isi'   => $request->isi,
            'gambar_berita' => $nama_file
        ]);
        return redirect()->back()->with('success', 'Berita Baru Berhasil Di Tambahkan');
    }
    public function upload_tag(Request $request)
    {
        $data = Tag::create($request->all());
        return redirect()->back()->with('success', 'Tag Baru Berhasil Di Tambahkan');

    }
    public function hapus_berita($id)
    {
        $data = Berita::find($id)->delete();
        return redirect()->back()->with('info', 'Berita Berhasil Di Hapus');

    }
    public function hapus_tag($id)
    {
        $data = Tag::find($id)->delete();
        return redirect()->back()->with('info', 'Tag Berhasil Di Hapus');

    }
    public function edit_berita($id)
    {
        $data = Berita::find($id);
        $tag = Tag::all();
        return view('Dashboard/berita/edit', compact('data', 'tag'));
    }
    public function update_berita(Request $request, $id)
    {
       $gambar = $request->file('gambar_berita');
       if(is_null($gambar)){
        $data = Berita::find($id)->update([
            'judul' => $request->judul,
            'tag'   => $request->tag,
            'isi'   => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Berita Berhasil Di Update Tanpa Gambar');
       }else{
        $nama_file = $gambar->getClientOriginalName();
        $path = 'gambar_berita';
        $gambar->move($path, $nama_file);
        $data = Berita::find($id)->update([
            'judul' => $request->judul,
            'tag'   => $request->tag,
            'isi'   => $request->isi,
            'gambar_berita' => $nama_file
        ]);
        return redirect()->back()->with('success', 'Berita Berhasil Di Update Dengan Gambar');
       }
    }


    // INFORMASI
    public function informasi()
    {
        # code...
    }
}
