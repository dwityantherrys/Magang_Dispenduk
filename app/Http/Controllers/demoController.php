<?php

namespace App\Http\Controllers;

use App\Models\kotamalang;
use App\Models\kecamatan;
use App\Models\laporan;
use App\Models\jenisdata;
use Illuminate\Http\Request;
class foruser extends Controller
{
    public function index()
    {
         $kotamalang = kotamalang::all();
        $kecamatan = kecamatan::all();
        $jenisdata = jenisdata::all();
        $laporan = laporan::all();
        return view('demo.tampil', compact('demo','kecamatan','laporan','jenisdata','kotamalang'));
    }
    public function about()
    {
        return view('about');
    }
    public function akomodasi()
    {
        return view('akomodasi');
    }
    public function galeri()
    {
      
        
        
    }
      public function show($id)
    {
        //
        // $kotamalang = kotamalang::find($id);
        // $kecamatan = kecamatan::select('id','id_kecamatans', 'kelurahan')->where('id_kecamatans', $id)->get();
        // return view ('kelurahan.show', compact('kecamatan','kotamalang'));
      
      $kotamalang = kotamalang::find($id);
        $kecamatan = kecamatan::select('id','id_kecamatans', 'kelurahan')->where('id_kecamatans', $id)->get();
        return view ('demo.show', compact('kecamatan','kotamalang'));
        
    
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function home2()
    {
        return view('home2');
    }
}
