<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    //
    protected $table='vaksin';
    protected $fillable = [
    'nama',
    'usia',
    'tgl_lahir',
    'jenis_kelamin',
    'alamat',   
    'nik',    
    'status',
    ];

/*    public function darah()
    {
       return $this->belongsTo('App\Darah', 'gol_darah_id', 'id_darah'); 
    }*/
   
}
