<?php

namespace App\Http\Controllers;

use App\Models\kotamalang;
use App\Models\kecamatan;
use App\Models\laporan;
use App\Models\jenisdata;
use Illuminate\Http\Request;

use App\Models\detail_laporan;
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
        $detail_laporan = detail_laporan::all();
        return view('galeri', compact('kecamatan','detail_laporan','kotamalang'));
        
        
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
