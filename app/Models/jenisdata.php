<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Laporan;
class Jenisdata extends Model
{
    protected $table='jenis_datas';
    protected $fillable = [
    'id',
    'jenis',
    
    ];

    public function Jenis_data()
    {
        return $this->hasMany(Laporan::class,'id_jenis_datas');
    }
}
