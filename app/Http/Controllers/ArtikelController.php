<?php

namespace App\Http\Controllers;

use Whoops\Run;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Informasi;
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
    public function upload_kategori(Request $request)
    {
        $data = Kategori::create($request->all());
        return redirect()->back()->with('success', 'Kategori Baru Berhasil Di Tambahkan');
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
        $data = Informasi::orderBy('id', 'DESC')->get();
        $kateg = Kategori::all();
        return view('Dashboard/informasi/index', compact('data', 'kateg'));
    }
    public function upload_informasi(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi'   => 'required',
            'kategori' => 'required',
            'gambar_informasi' => 'required|mimes:jpeg,jpg,png,svg'
        ]);
        $gambar = $request->file('gambar_informasi');
        $nama_file = $gambar->getClientOriginalName();
        $path = 'gambar_informasi';
        $gambar->move($path, $nama_file);
        $data = Informasi::create([
            'judul' => $request->judul,
            'isi'   => $request->isi,
            'kategori' => $request->kategori,
            'gambar_informasi' => $nama_file
        ]);
        return redirect()->back()->with('success', 'Informasi Berhasil Di Upload');
       
    }
    public function hapus_informasi($id)
    {
        $data = Informasi::find($id)->delete();
        return redirect()->back()->with('success', 'Informasi Berhasil Di Hapus');

    }
    public function edit_informasi($id)
    {
        $data = Informasi::find($id);
        $kateg = Kategori::all();
        return view('Dashboard/informasi/edit', compact('data', 'kateg'));
    }
    public function update_informasi(Request $request, $id)
    {
        $gambar = $request->file('gambar_informasi');
       if(is_null($gambar)){
        $data = Informasi::find($id)->update([
            'judul' => $request->judul,
            'isi'   => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Informasi Berhasil Di Update Tanpa Gambar');
       }else{
        $nama_file = $gambar->getClientOriginalName();
        $path = 'gambar_informasi';
        $gambar->move($path, $nama_file);
        $data = Informasi::find($id)->update([
            'judul' => $request->judul,
            'isi'   => $request->isi,
            'gambar_informasi' => $nama_file
        ]);
        return redirect()->back()->with('success', 'Informasi Berhasil Di Update Dengan Gambar');
       }
    }
    public function cari_tanggal(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
        ]);
        $tgl_a = $request->tanggal_awal;
        $tgl_ak = $request->tanggal_akhir;
        if($tgl_a == null || $tgl_ak == null){
            return redirect()->back()->with('gagal', 'Tidak ada informasi pada tanggal tersebut');

        }elseif ($tgl_a == null || $tgl_ak !== null) {
            return redirect()->back()->with('gagal', 'Tidak ada informasi pada tanggal tersebut');

        }elseif ($tgl_a !== null || $tgl_ak == null) {
            return redirect()->back()->with('gagal', 'Tidak ada informasi pada tanggal tersebut');

        }else{
            $startDate = Carbon::createFromFormat('Y-m-d', $request->tanggal_awal);
$endDate = Carbon::createFromFormat('Y-m-d', $request->tanggal_akhir);
        $kateg = Kategori::all();
$data = Informasi::whereBetween('created_at', [$startDate, $endDate])->get();
        if($data == NULL){
            $data = '';
            $kateg = Kategori::all();

            return view('Dashboard/informasi/index', compact('data', 'kateg'));

        }else{
            return view('Dashboard/informasi/index', compact('data', 'kateg'));

        }
        }
        

    }
    public function cari_tanggal_berita(Request $request)
    {
        $request->validate([
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
        ]);
        $tgl_a = $request->tanggal_awal;
        $tgl_ak = $request->tanggal_akhir;
        if($tgl_a == null || $tgl_ak == null){
            return redirect()->back()->with('gagal', 'Tidak ada Berita pada tanggal tersebut');

        }elseif ($tgl_a == null || $tgl_ak !== null) {
            return redirect()->back()->with('gagal', 'Tidak ada Berita pada tanggal tersebut');

        }elseif ($tgl_a !== null || $tgl_ak == null) {
            return redirect()->back()->with('gagal', 'Tidak ada Berita pada tanggal tersebut');

        }else{
            $startDate = Carbon::createFromFormat('Y-m-d', $request->tanggal_awal);
$endDate = Carbon::createFromFormat('Y-m-d', $request->tanggal_akhir);
        $kateg = Kategori::all();
$data = Berita::whereBetween('created_at', [$startDate, $endDate])->get();
        if($data == NULL){
            $data = '';
            $kateg = Kategori::all();

            return view('Dashboard/informasi/index', compact('data', 'kateg'));

        }else{
            return view('Dashboard/informasi/index', compact('data', 'kateg'));

        }
        }
        

    }
}
