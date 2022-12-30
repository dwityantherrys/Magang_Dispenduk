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
        return view('userpage.index');
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
        $kotamalang = kotamalang::all();
        $kecamatan = kecamatan::all();
        $jenisdata = jenisdata::all();
        $laporan = laporan::all();
        return view('galeri', compact('kecamatan','laporan','jenisdata','kotamalang'));
        
        
    }
    public function geleri($id)
    {
        //
        $kotamalang = kotamalang::find($id);
        $kecamatan = kecamatan::select('id','id_kecamatans', 'kelurahan')->where('id_kecamatans', $id)->get();
        return view ('demo.tampil', compact('kecamatan','kotamalang'));
        // return redirect('masuk/kota_malang/' . $id);
        
    
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
