<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Aplikasi;
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
        return view('Dashboard/index', compact('aplikasi', 'nama_desa'));
    }
}
