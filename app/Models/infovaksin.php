<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infovaksin extends Model
{
    protected $table='info_vaksin';
    protected $fillable = [
        'gambar',
    'lokasi',
    'tanggal',
    'waktu',
    'keterangan'
    ];
}
