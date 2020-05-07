<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $fillable = ['nama_langkap','no_nik','ttl','jenis_kelamin','golongan_darah','agama','status_perkawinan','pekerjaan','kewarganegaraan','kepala_keluarga_id'];
    function kepala_keluarga(){

    	return $this->belongsTo('App\KepalaKeluarga');
    }
}
