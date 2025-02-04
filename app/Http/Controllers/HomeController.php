<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Database;

use App\Models\Pegawai;
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

        // $pegawais = Pegawai::where('nama')->count();
        $pegawais = Pegawai::count();

        return view('home', compact('pegawais'));

        // $pegawais = Pegawai::get();

    }
}
