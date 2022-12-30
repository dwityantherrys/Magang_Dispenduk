<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Darah;
use App\Vaksin;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('masuk');
        $vaksin=Vaksin::all();
        return view('vaksin.tampil', compact('vaksin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vaksin =Vaksin::all();
        return view('vaksin.tambah' , compact('vaksin'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('msk');
        $vaksin = new Vaksin();
        $vaksin->nama = $request ->nama;
        $vaksin->usia = $request ->usia;
        $vaksin->tgl_lahir = $request ->tgl_lahir;
        $vaksin->jenis_kelamin = $request ->jenis_kelamin;
     //   $vaksin->gol_darah_id = $request ->gol_darah_id;
        $vaksin->alamat = $request ->alamat;        
        $vaksin->nik = $request ->nik;
        $vaksin->status = $request ->status;
        
        $vaksin->save();
        return redirect ('vaksin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vaksin = Vaksin::find($id);
        return view ('vaksin.show', compact('vaksin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $vaksin = Vaksin::find($id);
        //$darah =Darah::all();
        return view ('vaksin.edit', compact('vaksin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vaksin  $vaksin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vaksin = \App\Vaksin::find($id);
        $vaksin->nama = $request ->nama;
        $vaksin->usia = $request ->usia;
        $vaksin->tgl_lahir = $request ->tgl_lahir;
        $vaksin->jenis_kelamin = $request ->jenis_kelamin;
    //    $vaksin->gol_darah_id = $request ->gol_darah_id;
        $vaksin->alamat = $request ->alamat;        
        $vaksin->nik = $request ->nik;   
        $vaksin->status = $request ->status;
        $vaksin->save();  


        return redirect('vaksin');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vaksin = Vaksin::find($id);
        $vaksin->delete();

        return redirect('vaksin');
    }
}
