<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::latest()->paginate(5);
        return view('pegawais.index',compact('pegawais'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);
        Pegawai::create($request->all());
        return redirect()->route('pegawais.index')
                        ->with('success','Pegawai created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawais.show',compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit',compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);
        $pegawai->update($request->all());
        return redirect()->route('pegawais.index')
                        ->with('success','pegawai updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index')
                        ->with('success','pegawai deleted successfully');
    }
}
