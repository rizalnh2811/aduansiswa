<?php

namespace App\Http\Controllers;

use App\Aspirasi;
use Illuminate\Http\Request;

class AspirasianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.laporkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $aspirasi = new Aspirasi;

        $aspirasi->namalengkap = $request->namalengkap;
        $aspirasi->keluh = $request->keluh;
        $aspirasi->kelas = $request->kelas;
        $aspirasi->jeniskelamin = $request->jeniskelamin;
        $aspirasi->jurusan = $request->jurusan;
        $aspirasi->nomorhp = $request->nomorhp;
        $aspirasi->kategori = $request->kategori;

        $aspirasi->save();
        return redirect('/success') - with('status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirasi $aspirasi)
    {
        return view('success', compact('aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
