<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KepalaKeluarga extends Model
{
    protected $table = 'kepala_keluarga';
    function keluarga(){
    	return $this->hasMany('App\Keluarga','kepala_keluarga_id');
    }
}
