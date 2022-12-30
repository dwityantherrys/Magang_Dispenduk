<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kotamalang extends Model
{
    protected $table='kecamatans';
    protected $fillable = [
    'id',
    'kecamatan',
    ];

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class,'id_kecamatans');
    }
}
