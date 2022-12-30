<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table='pegawais';
    protected $fillable = [
    'NIP',
    'nama',
    'jabatan'
    ];
}
