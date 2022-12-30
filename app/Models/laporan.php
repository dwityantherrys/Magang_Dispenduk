<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Jenisdata;
class Laporan extends Model
{
    protected $table='laporans';
    protected $fillable = [
    'id',
    'id_kelurahans',
    'tahun',
    'semester',
    'id_jenis_datas',
    'value'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'id_kelurahans');
    }
     public function jenisdata()
    {
        return $this->belongsTo(Jenisdata::class,'id_jenis_datas');
    }
}
