<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kotamalang;
use App\Models\kecamatan;
use App\Models\laporan;
use App\Models\jenisdata;

class kotaMalangController extends Controller
{

    public function index()
    {
        $kotamalang=kotamalang::all();
        return view('kota_malang.tampil', compact('kotamalang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kotamalang =kotamalang::all();
        return view('kota_malang.tambah' , compact('kotamalang'));

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
        $kotamalang = new kotamalang();
        $kotamalang->kecamatan = $request ->kecamatan;
        $kotamalang->save();
        return redirect ('masuk/kota_malang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kotamalang  $kotamalang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kotamalang = kotamalang::find($id);
        $kecamatan = kecamatan::select('id','id_kecamatans', 'kelurahan')->where('id_kecamatans', $id)->get();
        return view ('kota_malang.show', compact('kecamatan','kotamalang'));
        // return redirect('masuk/kota_malang/' . $id);
        
    
    }
     public function detail($id_kel)
    {
        //
        $jenisdata = jenisdata::all(); 
        $kecamatan = kecamatan::find($id_kel);
        $laporan = laporan::select('id','id_kelurahans', 'tahun', 'semester' , 'id_jenis_datas' , 'value')->where('id_kelurahans', $id_kel)->with('kecamatan','jenisdata')->get();
        return $this-> view ('kota_malang.detail', compact('kecamatan','laporan','jenisdata','kotamalang'));
        // return redirect('masuk/kota_malang/' . $id);
        
    
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
