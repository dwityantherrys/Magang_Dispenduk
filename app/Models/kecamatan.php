<?php

namespace App\Models;
use App\Models\Jenisdata;
use App\Models\Kotamalang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table='kelurahans';
    protected $fillable = [
    'id',
    'id_kecamatans',
    'kelurahan'
    ];

    public function kotamalang()
    {
        return $this->belongsTo(Kotamalang::class,'id_kecamatans');
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class,'id_kelurahans');
    }
}
