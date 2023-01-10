<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kotamalang;
use App\Models\kecamatan;
use App\Models\detail_laporan;
class demoController extends Controller
{

    public function index()
    {
        $kotamalang=kotamalang::all();
        $kecamatan=kecamatan::all();
        $detail_laporan = detail_laporan::all();
        return view('demo.tampil', compact('kotamalang','kecamatan','detail_laporan'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\kotamalang  $kotamalang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  $kotamalang=kotamalang::all();
        $kecamatan = kecamatan::find($id);
        $detail_laporan=detail_laporan::orderBy('id','ASC')->with('kecamatan')->where('id_kelurahans',$id)->get();
        
        return view('demo.show', compact('kecamatan','detail_laporan'));
        
    
    }
   
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kotamalang  $kotamalang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $kotamalang = kotamalang::find($id);
        return view ('kota_malang.edit', compact('kotamalang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kotamalang  $kotamalang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kotamalang = \App\Models\kotamalang::find($id);
        $kotamalang->kecamatan = $request ->kecamatan;
        $kotamalang->save();



        return redirect('masuk/kota_malang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kotamalang  $kotamalang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kotamalang = kotamalang::find($id);
        $kotamalang->delete();

        return redirect('masuk/kota_malang');
    }
}
