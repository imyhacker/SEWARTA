<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('Dashboard/akun/index', compact('data'));
    }
    public function tambah_akun(Request $req)
    {
       $req->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required|min:8'
       ]);

       $data = User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => bcrypt($req->input('password'))
       ]);

       return redirect()->back()->with('success', 'Berhasil Menambahkan Akun Baru');
    }
    public function hapus($id)
    {
        $data = User::find($id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Akun');

    }
    public function akunku()
    {
        $data = User::where('email', Auth::user()->email)->first();
        return view('Dashboard/akun/akunku', compact('data'));
    }
    public function update_akun(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
           ]);
    
           $data = User::where('email', Auth::user()->email)->update([
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'password' => bcrypt($req->input('password'))
           ]);
    
           return redirect()->back()->with('success', 'Berhasil Update Akun');
    }
}
