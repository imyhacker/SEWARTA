<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Alamat;
use App\Models\Tentang;
use App\Models\Aplikasi;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function upload_nama_aplikasi(Request $request)
    {
        $data = Aplikasi::first();
        if($data == null){
            $buat = Aplikasi::create([
                'nama_aplikasi' => $request->nama_aplikasi
            ]);
            return redirect()->back()->with('success', 'Nama Aplikasi Berhasil Di Input');
        }else{
            $buat = Aplikasi::first()->update([
                'nama_aplikasi' => $request->nama_aplikasi
            ]);
            return redirect()->back()->with('success', 'Nama Aplikasi Berhasil Di Update');

        }
    }
    public function upload_alamat(Request $request)
    {
        $data = Alamat::first();
        if($data == null){
            $buat = Alamat::create([
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
                'email'     => $request->email,
            ]);
            return redirect()->back()->with('success', 'Alamat Berhasil Di Input');

        }else{
            $buat = Alamat::first()->update([
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
                'email'     => $request->email,
            ]);
            return redirect()->back()->with('success', 'Alamat Berhasil Di Input');

        }
    }
    public function upload_tentang(Request $request)
    {
       
        $data = Tentang::first();
       
        if($data == null){
            $gambar = $request->file('gambar_tentang');
            $nama_file = $gambar->getClientOriginalName();
            $path = 'gambar_tentang';
            $gambar->move($path, $nama_file);
            $data = Tentang::create([
                'tentang' => $request->isi,
                'gambar_tentang' => $nama_file
            ]);
            return redirect()->back()->with('success', 'Tentang Kami Berhasil Di Input');

        }else{
            $gambar = $request->file('gambar_tentang');

            $nama_file = $gambar->getClientOriginalName();
            $path = 'gambar_tentang';
            $gambar->move($path, $nama_file);
            $data = Tentang::first()->update([
                'tentang' => $request->isi,
                'gambar_tentang' => $nama_file

            ]);
            return redirect()->back()->with('info', 'Tentang Kami Berhasil Di Update');

        }
       
    }
    public function upload_desa(Request $request)
    {
        $data = Desa::first();
        if($data == null){
            $data = Desa::create([
                'desa' => $request->desa,
            ]);
            return redirect()->back()->with('success', 'Nama Desa Berhasil Di Update');

        }else{
            $data = Desa::first()->update([
                'desa' => $request->desa,
            ]);
            return redirect()->back()->with('success', 'Nama Desa Berhasil Di Update');

        }
    }
}
